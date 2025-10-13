<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;
use Livewire\Attributes\Url; 
use App\Models\Center;
use Livewire\WithPagination;
// You may need to import other models if you fetch their details for the title, 
// but for the query itself, only Course is strictly needed here.

class CourseList extends Component
{
       use WithPagination;
    // Livewire Filter (User selectable buttons: 'online', 'physical', or 'all')
    #[Url(as: 'type', except: 'all')]
    public string $filterType = 'all'; 

    public bool $showButtons = true;
    public bool $usePagination = false;

// NEW: Price Range Filter (e.g., '0-10000', '10000-50000')
    #[Url(as: 'price', except: 'all')]
    public string $filterPrice = 'all';

    // NEW: Location Search
    #[Url(as: 'location', except: '')]
    public string $searchLocation = '';

    // Contextual Filters (Set by the parent view/route)
    public ?string $categorySlug = null;
    public ?int $tutorId = null; 

    /**
     * Initializes the component.
     */
    public function mount(
        string $initialType = 'all', 
        bool $showButtons = true,
        ?string $categorySlug = null, 
        ?int $tutorId = null ,
         bool $usePagination = false // 👈 new param
    ): void
   {
        // Handle URL persistence for filterType
        // The #[Url] attribute handles the URL population for filterType, filterPrice, and searchLocation
        
        // This logic is simplified by #[Url] but kept for initialType check
        if (request()->missing('type') || request('type') === null) {
            $this->filterType = $initialType;
        } else {
            $this->filterType = request('type');
        }

        // NEW: Handle initial filterPrice from URL
        $this->filterPrice = request('price', 'all');

        // NEW: Handle initial searchLocation from URL
        $this->searchLocation = request('location', '');
        
        $this->showButtons = $showButtons;
        
        // Set the Contextual Filters
        $this->categorySlug = $categorySlug;
        $this->tutorId = $tutorId;
         $this->usePagination = $usePagination;
    }

    public function render()
    {
        // Start the query
        $query = Course::query();

        // 1. APPLY CONTEXTUAL FILTER: CATEGORY SLUG
        if ($this->categorySlug) {
            // The Course model has a 'category()' BelongsTo relationship.
            // Use whereHas to filter courses where the related category's slug matches.
            $query->whereHas('category', function ($q) {
                $q->where('slug', $this->categorySlug);
            });
        }

        // 2. APPLY CONTEXTUAL FILTER: TUTOR ID
        if ($this->tutorId) {
            // The Course model has an 'assignedTutor()' BelongsTo relationship, 
            // which links to 'tutor_id' or 'assigned_tutor_id' foreign key.
            // Since the model uses `assigned_tutor_id` in `assignedTutor()`:
            $query->where('assigned_tutor_id', $this->tutorId);
            // NOTE: If your column is just 'tutor_id', change the above to:
            // $query->where('tutor_id', $this->tutorId);
            // I'll stick to the model definition:
            // $query->where('assigned_tutor_id', $this->tutorId); 
        }

        // 3. APPLY LIVEWIRE FILTER (The user-changeable type filter)
        if ($this->filterType !== 'all') {
            $query->where('type', $this->filterType);
        }




        // 4. NEW: APPLY LIVEWIRE FILTER: PRICE RANGE
        if ($this->filterPrice !== 'all') {
            [$min, $max] = explode('-', $this->filterPrice);
            $min = (int)$min;
            $max = (int)$max;
            
            // Assuming Course has a 'price' relationship and Price model has an 'amount' column
            $query->whereHas('price', function ($q) use ($min, $max) {
                $q->where('amount', '>=', $min);
                
                // If max is 0, it means 'greater than or equal to min' (like '100k-up')
                if ($max > 0) {
                    $q->where('amount', '<=', $max);
                }
            });
        }
        
        // 5. NEW: APPLY LIVEWIRE FILTER: LOCATION SEARCH
        if ($this->searchLocation) {
             // Filter by location/center. You need a relationship for this.
             // ASSUMPTION: 'centers' relationship exists on Course, and Center model has a 'location' column.
            $query->whereHas('centers', function ($q) {
                $q->where('location', 'like', '%' . $this->searchLocation . '%');
                 // You might also check a 'city' or 'address' column
            });
            
             // If location is stored directly on the course model:
            // $query->where('location', 'like', '%' . $this->searchLocation . '%'); 
        }

                    // Apply eager loading and counts
            $courses = $query->withCount([
                    'users as registered_count', 
                    'comments', 
                    'likes', 
                    'shares', 
                ])
                ->with(['price', 'centers']);

            if ($this->usePagination) {
                $courses = $courses->paginate(6)->onEachSide(1);
            } else {
                $courses = $courses->limit(6)->get();
            }



        
        // --- Transformation Logic ---
        if ($this->usePagination) {
    $items = $courses->through(fn($course) => $this->transformCourse($course));
} else {
    $items = $courses->map(fn($course) => $this->transformCourse($course));
}


   

        // Calculate a dynamic title based on the context
        $title = match (true) {
             $this->categorySlug !== null => "Courses in " . ucfirst(str_replace('-', ' ', $this->categorySlug)),
             $this->tutorId !== null => "Other Courses by this Tutor",
             $this->filterType === 'physical' => 'Our Physical Trainings',
             $this->filterType === 'online' => 'Our Virtual Trainings',
             default => 'All Available Trainings',
        };

        return view('livewire.course-list', [
            'items' => $items,
            'sectionTitle' => $title, 
        ]);


           // NEW: Add a method for location search (called on keyup or button click)
        $this->doSearchLocation(true); // Re-run query on initial load with URL param if present
        
        return view('livewire.course-list', [
            'items' => $items,
            'sectionTitle' => $title, 
        ]);
    }
private function transformCourse($course)
{
    $priceValue = $course->price ? $course->price->amount : 0;
    $priceFormatted = ($priceValue == 0) ? 'Free' : '₦' . number_format($priceValue);

    // Determine the correct course link
    if ($course->type === 'online') {
        // ONLINE: /center/{course_id}
        $link = route('courses.online', ['course' => $course->id]);
    } else {
        // PHYSICAL or HYBRID: find the related center
        // (assuming you have a `centers()` or `center()` relationship)
        $centerId = optional($course->centers->first())->id ?? 1; // fallback center if none
        $link = route('courses.center', ['center' => $centerId, 'course' => $course->id]);
    }

    return [
        'title' => $course->title,
        'thumbnail_url' => $course->image_thumbnail_url,
        'type' => ucfirst($course->type),
        'registered_count' => $course->registered_count,
        'comments_count' => $course->comments_count,
        'likes_count' => $course->likes_count,
        'shares_count' => $course->shares_count,
        'views_count' => $course->views_count ?? 0,
        'rating' => $course->average_rating ?? 4.34,
        'price' => $priceFormatted,
        'link' => $link, // ✅ dynamic link added here
        'button_text' => 'Register',
    ];
}


    // Method to be called when a button is clicked
    public function setFilter(string $type): void
    {
        $this->filterType = $type;
    }

    
    // NEW: Method to be called when a price button is clicked
    public function setPriceFilter(string $priceRange): void
    {
        $this->filterPrice = $priceRange;
    }
    
    // NEW: Method to be called when location is searched
    public function doSearchLocation(bool $skipReset = false): void
    {
        // This method doesn't need to do anything but trigger the render() method.
        // It's useful if you want to perform validation or additional logic before filtering.
        // The Livewire binding `wire:model.live="searchLocation"` can also handle this directly.
    }
}