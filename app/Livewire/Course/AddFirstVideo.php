<?php

namespace App\Livewire\Course;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Video;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AddFirstVideo extends Component
{
    use WithFileUploads;

    public $courseId;
    public $title = '';
    public $video_file;
    public $thumbnail_file;
    public $duration;

    protected $rules = [
        'title'          => 'required|string|max:255',
        'video_file'     => 'required|file|mimes:mp4,mov,avi,wmv|max:102400',
        'thumbnail_file' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'duration'       => 'nullable|integer|min:1',
    ];

    public function mount($courseId)
    {
        $this->courseId = $courseId;
    }

    public function save()
    {
        $this->validate();

        $videoPath = null;
        $thumbPath = null;

        try {
            // ✅ Upload video
            $videoPath = $this->video_file->store('videos', 'public');
            $videoUrl = Storage::disk('public')->url($videoPath);

            // ✅ Upload thumbnail (if provided)
            $thumbUrl = null;
            if ($this->thumbnail_file) {
                $thumbPath = $this->thumbnail_file->store('thumbnails', 'public');
                $thumbUrl = Storage::disk('public')->url($thumbPath);
            }

            // ✅ Determine uploader (Tutor or User fallback)
            $tutorId = Auth::user()?->tutor?->id 
                    ?? Auth::user()?->tutor_id 
                    ?? Auth::id();

            // ✅ Create the Video record
            $video = Video::create([
                'uploader_user_id' => $tutorId,
                'title'            => $this->title,
                'video_url'        => $videoUrl,
                'thumbnail_url'    => $thumbUrl,
                'duration'         => $this->duration,
            ]);

            // ✅ Attach to course as first video (no duplicates)
            $course = Course::findOrFail($this->courseId);
            $course->videos()->syncWithoutDetaching([
                $video->id => ['order_index' => 0]
            ]);

            // ✅ Clear fields & notify
            $this->reset(['title', 'video_file', 'thumbnail_file', 'duration']);
           // $this->dispatch('toast', 'First video uploaded successfully!');
                 $this->dispatch('success-notification', 
        message: '🎉 First video uploaded successfully.',
        type: 'video'
    );
            $this->dispatch('video-added');
            $this->dispatch('close-modal', 'add-first-video-modal');

        } catch (\Exception $e) {
            // ✅ Delete uploaded files if error
            if ($videoPath) Storage::disk('public')->delete($videoPath);
            if ($thumbPath) Storage::disk('public')->delete($thumbPath);

            Log::error("AddFirstVideo error: {$e->getMessage()}");
            $this->addError('upload', "Sorry, something went wrong while uploading. Please try again.");
        }
    }

    public function render()
    {
        return view('livewire.course.add-first-video');
    }
}
