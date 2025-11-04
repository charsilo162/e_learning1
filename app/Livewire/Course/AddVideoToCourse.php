<?php

namespace App\Livewire\Course;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Course;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AddVideoToCourse extends Component
{
    use WithFileUploads;

    public $showModal = false;
    public $courses = [];
    public $selectedCourseId = '';
    public $title = '';
    public $video_file = null;
    public $thumbnail_file = null;
    public $duration = null;
    public $order_index = 1;

    protected $rules = [
        'selectedCourseId' => 'required|exists:courses,id',
        'title'            => 'required|string|max:255',
        'video_file'       => 'required|file|mimes:mp4,mov,avi,wmv|max:102400',
        'thumbnail_file'   => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'duration'         => 'nullable|integer|min:1',
        'order_index'      => 'required|integer|min:1',
    ];

    protected $listeners = ['open-add-video-modal' => 'openWithCourse'];

    public function mount()
    {
        $this->loadCourses();
    }

    public function loadCourses()
    {
        $this->courses = Course::withCount('videos')
            ->orderBy('title')
            ->get()
            ->map(fn($c) => [
                'id' => $c->id,
                'title' => $c->title,
                'video_count' => $c->videos_count,
                'next_order' => $c->videos_count + 1,
            ])->toArray();
    }

    public function updatedSelectedCourseId()
    {
        $course = collect($this->courses)->firstWhere('id', $this->selectedCourseId);
        $this->order_index = $course['next_order'] ?? 1;
    }

    public function openModal() { $this->showModal = true; }

    public function openWithCourse($courseId)
    {
        $this->selectedCourseId = $courseId;
        $this->updatedSelectedCourseId();
        $this->openModal();
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->reset(['selectedCourseId', 'title', 'video_file', 'thumbnail_file', 'duration', 'order_index']);
    }

   public function save()
{
    $this->validate();

    $videoPath = null;
    $thumbPath = null;

    try {
        // 1. Upload files
        $videoPath = $this->video_file->store('videos', 'public');
        $videoUrl = Storage::disk('public')->url($videoPath);

        $thumbUrl = null;
        if ($this->thumbnail_file) {
            $thumbPath = $this->thumbnail_file->store('thumbnails', 'public');
            $thumbUrl = Storage::disk('public')->url($thumbPath);
        }

        // 2. Create Video with USER ID
        $video = Video::create([
            'uploader_user_id' => Auth::id(),        // ← USER ID
            'title'            => $this->title,
            'video_url'        => $videoUrl,
            'thumbnail_url'    => $thumbUrl,
            'duration'         => $this->duration,
        ]);

        // 3. Attach to course
        $course = Course::find($this->selectedCourseId);
        $course->videos()->attach($video->id, ['order_index' => $this->order_index]);

        // 4. Success
        // $this->dispatch('toast', "Video added as Part {$this->order_index}!");
         $this->dispatch('success-notification',  message: "Video added as Part {$this->order_index}!",
        type: 'video'
    );
        $this->closeModal();
        $this->loadCourses();

    } catch (\Exception $e) {
        if ($videoPath) Storage::disk('public')->delete($videoPath);
        if ($thumbPath) Storage::disk('public')->delete($thumbPath);

        Log::error('AddVideoToCourse error: ' . $e->getMessage());
        $this->addError('video_file', 'Upload failed: ' . $e->getMessage());
    }
}

    public function render()
    {
        return view('livewire.course.add-video-to-course');
    }
}