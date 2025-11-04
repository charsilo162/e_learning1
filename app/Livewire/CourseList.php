<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;
use Livewire\Attributes\Url; 
use Livewire\WithPagination;

class CourseList extends Component
{
    use WithPagination;

    // 1. DYNAMIC URL FILTERS (Managed by Livewire's #[Url] attribute)
    #[Url(as: 'type', except: 'all')]
    public string $filterType = 'all'; 

    #[Url(as: 'price', except: 'all')]
    public string $filterPrice = 'all';

    #[Url(as: 'location', except: '')]
    public string $searchLocation = '';

    // 2. CONTEXTUAL/INLINE PROPERTIES (Passed from the parent Blade view)
    public ?string $categorySlug = null;
    public ?int $tutorId = null; 
    public bool $usePagination = false; // Controls whether to paginate or limit
    public ?int $limit = null; // Used when $usePagination is false (e.g., on a detail page)

    // 3. EVENT LISTENERS
    // These methods update the corresponding property when a filter component dispatches an event
    protected $listeners = [
        'updateFilter' => 'handleFilterUpdate',
        'clearAllFilters' => 'clearFilters',
    ];

    public function handleFilterUpdate(string $key, $value): void
    {
        // Dynamically update the property and reset pagination if a filter changes
      $this->$key = $value;
        $this->resetPage(); 
    }
    
    public function clearFilters(): void
    {
         $this->filterType = 'all';
        $this->filterPrice = 'all';
        $this->searchLocation = '';
        $this->resetPage();
    }

    /**
     * Initializes the component.
     */
    public function mount(
        ?string $categorySlug = null, 
        ?int $tutorId = null,
        bool $usePagination = false 
    ): void
    {
        // Contextual Filters are set once on mount
        $this->categorySlug = $categorySlug;
        $this->tutorId = $tutorId;
        $this->usePagination = $usePagination;
        $this->limit = $usePagination ? null : 6;
    }

    public function render()
    {
        $query = Course::query();

        // 1. APPLY CONTEXTUAL FILTER: CATEGORY SLUG
        if ($this->categorySlug) {
            $query->whereHas('category', fn ($q) => $q->where('slug', $this->categorySlug));
        }

        // 2. APPLY CONTEXTUAL FILTER: TUTOR ID 👈 This is your specific filter
        if ($this->tutorId) {
            $query->where('assigned_tutor_id', $this->tutorId);
        }

        // 3. APPLY LIVEWIRE FILTER: TYPE
        if ($this->filterType !== 'all') {
            $query->where('type', $this->filterType);
        }

        // 4. APPLY LIVEWIRE FILTER: PRICE RANGE
        if ($this->filterPrice !== 'all') {
            [$min, $max] = explode('-', $this->filterPrice);
            $min = (int)$min;
            $max = (int)$max;
            
            $query->whereHas('price', function ($q) use ($min, $max) {
                 $q->where('amount', '>=', $min);
                 if ($max > 0) {
                     $q->where('amount', '<=', $max);
                 }
            });
        }
        
        // 5. APPLY LIVEWIRE FILTER: LOCATION SEARCH
        if ($this->searchLocation) {
            $query->whereHas('centers', fn ($q) => $q->where('location', 'like', '%' . $this->searchLocation . '%'));
        }

        // Eager load and count
         $courses = $query->withCount([
                    'users as registered_count', 
                    'comments', 
                    'likes', 
                    'shares', 
                ])
                ->with(['price', 'centers']);
              
        // Final Course Fetch
        if ($this->usePagination) {
            $courses = $query->paginate(6)->onEachSide(1);
        } else {
            $courses = $query->limit($this->limit ?? 6)->get();
        }

        // Transformation Logic
        $items = $this->usePagination
            ? $courses->through(fn($course) => $this->transformCourse($course))
            : $courses->map(fn($course) => $this->transformCourse($course));

        // Calculate a dynamic title
        $title = $this->calculateTitle();

        return view('livewire.course-list', [
            'items' => $items,
            'courses' => $courses, // Used for pagination links
            'sectionTitle' => $title, 
        ]);
    }

    private function calculateTitle(): string
    {
         // Logic to determine the section title based on active filters
         return match (true) {
            $this->categorySlug !== null => "Courses in " . ucfirst(str_replace('-', ' ', $this->categorySlug)),
            $this->tutorId !== null => "Other Courses by this Tutor",
            $this->filterType === 'physical' => 'Our Physical Trainings',
            $this->filterType === 'online' => 'Our Virtual Trainings',
            default => 'All Available Trainings',
         };
    }
    
   private function transformCourse($course)
{
    // 🚨 FIX 1: Ensure price is formatted correctly
    $priceValue = optional($course->price)->amount ?? 0;
    $priceFormatted = ($priceValue == 0) ? 'Free' : '₦' . number_format($priceValue);

    if ($course->type === 'online') {
 
        $link = route('courses.online', ['course' => $course->id]);
    } else {
        $centerId = $course->centers->first()->id ?? 1; // fallback center if none
        $link = route('courses.center', ['center' => $centerId, 'course' => $course->id]);
    }
    
    return [
        'title' => $course->title,
        'thumbnail_url' => $course->image_thumbnail_url,
        
        // 🚨 FIX 4: This is where the badge type comes from
        'type' => ucfirst($course->type), 
        
        // 🚨 FIX 5: Use the dynamic counts
        'registered_count' => $course->registered_count, // Fetched via withCount
        'comments_count' => $course->comments_count,     // Fetched via withCount
        'likes_count' => $course->likes_count,           // Fetched via withCount
        'shares_count' => $course->shares_count,         // Fetched via withCount
        'views_count' => $course->views_count ?? 0,
        'rating' => $course->average_rating ?? 4.34,
        
        // 🚨 FIX 6: Use the formatted price
        'price' => $priceFormatted,
        'link' => $link, // ✅ The dedicated link
        'button_text' => 'Register',
    ];
}
}