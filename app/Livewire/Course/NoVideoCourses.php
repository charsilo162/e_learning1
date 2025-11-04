<?php

namespace App\Livewire\Course;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Course;

class NoVideoCourses extends Component
{
    use WithPagination;

    public $search = '';
    public $showAddVideoModal = false;
    public $selectedCourseId = null;

    protected $queryString = ['search' => ['except' => '']];
    protected $listeners = ['video-added' => 'refreshCourses'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function openAddVideoModal($courseId)
    {
        $this->selectedCourseId = $courseId;
        $this->showAddVideoModal = true;

        $this->dispatch('open-modal', 'add-first-video-modal');
    }

    public function closeAddVideoModal()
    {
        $this->showAddVideoModal = false;
        $this->selectedCourseId = null;
        $this->dispatch('close-modal', 'add-first-video-modal');
    }

    public function publish($courseId)
    {
        Course::where('id', $courseId)->update(['publish' => 1]);
        $this->dispatch('toast', 'Course published!');
    }

    public function refreshCourses()
    {
        $this->resetPage();
    }

    public function render()
    {
        $courses = Course::query()
            ->with(['category'])
            ->withCount('videos')
            ->when($this->search, fn($q) => $q->where('title', 'like', "%{$this->search}%"))
            ->doesntHave('videos')
            ->orderByDesc('created_at')
            ->paginate(12);

        return view('livewire.course.no-video-courses', [
            'courses' => $courses,
        ]);
    }
}