<?php
namespace App\Livewire\Course;
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
           
        }
        
        // 3. Paginate the Results (3 items per row, 3 rows max per page = 9 items)
        $courses = $query->with('videos') // Eager load videos for the Part 2 logic
                         ->paginate(9); // Adjust per page as needed (e.g., 9 for 3 rows of 3 columns)
    //  dd($user);
        return view('livewire.course.enrolled-courses', [
            'courses' => $courses,
        ]);
    }
}