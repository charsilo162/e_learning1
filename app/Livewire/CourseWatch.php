<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

class CourseWatch extends Component
{
    // These must be public for Livewire to track and hydrate
    public Course $course;
    public ?Video $currentVideo = null;
    public Collection $videos;
    public ?int $videoId = null;

    protected $queryString = [
        'videoId' => ['except' => null, 'as' => 'v'],
    ];

    /**
     * Livewire Lifecycle Hook: Ensures pivot data is present on subsequent requests.
     */
    public function hydrate()
    {
        // Re-load the videos relationship on the course, which re-attaches 
        // the pivot data before any method (like setCurrentVideo) runs.
        $this->course->load(['videos']);
        $this->videos = $this->course->videos;
    }
    
    /**
     * Initializes the component on first load.
     */
    public function mount(int $courseId)
    {
        // 1. Fetch the Course with necessary relations
        // 'videos' is loaded with pivot data because of the Model relationship definition.
        $this->course = Course::with(['videos', 'users'])->findOrFail($courseId);
        $this->videos = $this->course->videos;

        // 2. Authorization Check:
        if (!Auth::check() || !$this->course->users->contains(Auth::id())) {
             // Redirect user if not authenticated or not enrolled
             return redirect()->route('dashboard')->with('error', 'Enrollment required.');
        }

        // 3. Set the initial video
        $this->setCurrentVideo($this->videoId);
    }

    /**
     * Loads the specific video or the first video.
     */
    public function setCurrentVideo(?int $id)
    {
        // Use the re-hydrated $this->videos collection to find the video
        if ($id) {
            $video = $this->videos->firstWhere('id', $id);
            if ($video) {
                $this->currentVideo = $video;
                $this->videoId = $id; 
                return;
            }
        }

        // Fallback to the first video
        if ($this->videos->isNotEmpty()) {
            $this->currentVideo = $this->videos->first();
            $this->videoId = $this->currentVideo->id;
        } else {
             $this->currentVideo = null;
             $this->videoId = null;
        }
    }

    public function render()
    {
        return view('livewire.course-watch');
    }
}