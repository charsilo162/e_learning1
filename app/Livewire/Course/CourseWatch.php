<?php

namespace App\Livewire\Course;

use Livewire\Component;
use Illuminate\Support\Collection;

class CourseWatch extends Component
{
    public ?array $course = null;
    public ?array $currentVideo = null;
    public Collection $videos;           // ← Now correct type
    public ?int $videoId = null;

    protected $queryString = [
        'videoId' => ['except' => null, 'as' => 'v'],
    ];

    public function mount(int $courseId)
    {
        $response = $this->api->get("courses/{$courseId}/watch");

        // If not enrolled → 403 → caught below
        if (isset($response['message']) && str_contains($response['message'], 'enrolled')) {
            return redirect()->route('dashboard')->with('error', 'You must enroll to watch this course.');
        }

        $this->course = $response['data'];
        $this->videos = collect($this->course['videos'] ?? []);

        $this->setCurrentVideo($this->videoId);
    }

    public function setCurrentVideo(?int $id)
    {
        $video = $this->videos->firstWhere('id', $id);

        if (!$video && $this->videos->isNotEmpty()) {
            $video = $this->videos->first();
        }

        $this->currentVideo = $video;
        $this->videoId = $video['id'] ?? null;
    }

    public function render()
    {
        return view('livewire.course.course-watch');
    }
}