<?php

namespace App\Livewire;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class UserCoursesList extends Component
{
    use WithPagination;

    public string $search = '';

    /**
     * Listen for the 'search-updated' event dispatched from the parent Blade view.
     * The #[On] attribute is the modern, clean way to declare listeners in Livewire 3.
     */
    #[On('search-updated')]
    public function updateSearch($searchTerm)
    {
        $this->search = $searchTerm;
        // Resetting pagination to the first page when a new search is performed.
        $this->resetPage();
    }
public function togglePublish($courseId)
{
    $course = Course::findOrFail($courseId);


    if ($course->uploader_user_id !== auth()->id()) {
        $this->dispatch('toast', ['message' => 'Unauthorized', 'type' => 'error']);
        return;
    }

    $course->update(['publish' => !$course->publish]);

    $this->dispatch('toast', [
        'message' => 'Course ' . ($course->publish ? 'published' : 'unpublished'),
        'type' => 'success'
    ]);
}
    public function render()
    {
        $userId = Auth::id() ?? 1;
        $query = Course::with([
            'price', // Eager load the price for online courses
            'centers' // Eager load centers for physical courses to get pivot data
        ])->withCount([
            'users',    // Gets the count of enrolled users (`users_count`)
            'comments', // Gets the count of comments (`comments_count`)
            'likes'     // Gets the count of likes (`likes_count`)
        ]);

        if (!empty($this->search)) {
            $query->where('title', 'like', '%' . $this->search . '%');
        }

        $courses = $query->latest()->paginate(6); // Paginate with 9 courses per page
//dd($courses);
        return view('livewire.user-courses-list', [
            'courses' => $courses,
        ]);
    }
}

