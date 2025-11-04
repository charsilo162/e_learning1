<?php

namespace App\Livewire\Course;

use Livewire\Component;
use App\Models\Course;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AddVideoToCourse extends Component
{
    public $showModal = false;
    public $courses = [];
    public $selectedCourseId = '';
    public $title = '';
    public $video_url = '';
    public $duration = null;
    public $order_index = 1;

    protected $rules = [
        'selectedCourseId' => 'required|exists:courses,id',
        'title'            => 'required|string|max:255',
        'video_url'        => 'required|url',
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
            ->map(function ($course) {
                return [
                    'id' => $course->id,
                    'title' => $course->title,
                    'video_count' => $course->videos_count,
                    'next_order' => $course->videos_count + 1,
                ];
            })->toArray();
    }

    public function updatedSelectedCourseId()
    {
        $course = collect($this->courses)->firstWhere('id', $this->selectedCourseId);
        $this->order_index = $course['next_order'] ?? 1;
    }

    public function openModal()
    {
        $this->showModal = true;
    }

    public function openWithCourse($courseId)
    {
        $this->selectedCourseId = $courseId;
        $this->updatedSelectedCourseId();
        $this->openModal();
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->reset(['selectedCourseId', 'title', 'video_url', 'duration', 'order_index']);
    }

    public function save()
    {
        $this->validate();

        $video = Video::create([
            'tutor_id'   => Auth::user()->tutor?->id ?? null,
            'title'      => $this->title,
            'video_url'  => $this->video_url,
            'duration'   => $this->duration,
        ]);

        DB::table('course_video')->insert([
            'course_id'   => $this->selectedCourseId,
            'video_id'    => $video->id,
            'order_index' => $this->order_index,
        ]);

        $this->dispatch('toast', "Video added as Part {$this->order_index}!");
        $this->closeModal();
        $this->loadCourses();
    }

    public function render()
    {
        return view('livewire.course.add-video-to-course');
    }
}