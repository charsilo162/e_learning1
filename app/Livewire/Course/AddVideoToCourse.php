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

    $data = [
        ['name' => 'course_id', 'contents' => $this->selectedCourseId],
        ['name' => 'title', 'contents' => $this->title],
        ['name' => 'order_index', 'contents' => $this->order_index],
        ['name' => 'video_file', 'contents' => fopen($this->video_file->getRealPath(), 'r'), 'filename' => $this->video_file->getClientOriginalName()],
    ];

    if ($this->thumbnail_file) {
        $data[] = ['name' => 'thumbnail_file', 'contents' => fopen($this->thumbnail_file->getRealPath(), 'r'), 'filename' => $this->thumbnail_file->getClientOriginalName()];
    }

    if ($this->duration) {
        $data[] = ['name' => 'duration', 'contents' => $this->duration];
    }

    $this->api->withToken()->post('videos', $data, true);

    $this->dispatch('success-notification', message: "Video added as Part {$this->order_index}!", type: 'video');
    $this->closeModal();
    $this->loadCourses();
}

    public function render()
    {
        return view('livewire.course.add-video-to-course');
    }
}