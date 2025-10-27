<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination; // 1. Use the Pagination Trait
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\Video;

class EnrolledCourses extends Component
{
    use WithPagination;
    
    // Public property for the search input
    public $search = '';

    // Pagination-related: Resets the page when the search term changes
    public function updatedSearch()
    {
        $this->resetPage();
    }

    /**
     * Helper to get the video for the 'Part 2' (index) link.
     * We'll link to the *first* video of the course by 'order_index'.
     *
     * @param Course $course
     * @return Video|null
     */
    public function getFirstCourseVideo(Course $course)
    {
        // Check if the relationship is loaded, otherwise lazy load
        if ($course->relationLoaded('videos')) {
            return $course->videos->sortBy('order_index')->first();
        }
        // Fallback for safety, though eager loading is better
        return $course->videos()->orderBy('order_index', 'asc')->first();
    }
    
    /**
     * Render method to fetch the filtered and paginated data.
     */
    public function render()
    {
        // 1. Start the Query
        $user = Auth::user();
        $query = $user ? $user->enrolledCourses() : Course::whereRaw('1 = 0'); // Ensure empty result if no user

        // 2. Apply Search Filter
        if (!empty($this->search)) {
            $searchTerm = '%' . $this->search . '%';

            $query->where(function ($q) use ($searchTerm) {
                // Filter by Course title OR Course description
                $q->where('courses.title', 'like', $searchTerm)
                  ->orWhere('courses.description', 'like', $searchTerm);
            });
            
            // NOTE: Filtering by Video title/description is complex in a many-to-many 
            // relationship on the Course side without using 'HAVING' or 'JOIN'.
            // For simplicity and performance, the above focuses on Course details.
            // If you absolutely need video filtering, we'd need a more complex query
            // using `whereHas` or `join`:
            
            /*
            $query->orWhereHas('videos', function($q) use ($searchTerm) {
                $q->where('title', 'like', $searchTerm)
                  ->orWhere('description', 'like', $searchTerm); // Assumes 'videos' table has a 'description'
            });
            */
        }
        
        // 3. Paginate the Results (3 items per row, 3 rows max per page = 9 items)
        $courses = $query->with('videos') // Eager load videos for the Part 2 logic
                         ->paginate(9); // Adjust per page as needed (e.g., 9 for 3 rows of 3 columns)

        return view('livewire.enrolled-courses', [
            'courses' => $courses,
        ]);
    }
}