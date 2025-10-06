<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;
use Livewire\Attributes\Url; 
use App\Models\Center;
// You may need to import other models if you fetch their details for the title, 
// but for the query itself, only Course is strictly needed here.

class CourseList extends Component
{
    // Livewire Filter (User selectable buttons: 'online', 'physical', or 'all')
    #[Url(as: 'type', except: 'all')]
    public string $filterType = 'all'; 

    public bool $showButtons = true;

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
        ?int $tutorId = null 
    ): void
    {
        // Handle URL persistence for filterType
        if (request()->missing('type') || request('type') === null) {
            $this->filterType = $initialType;
        } else {
            $this->filterType = request('type');
        }
        
        $this->showButtons = $showButtons;
        
        // Set the Contextual Filters
        $this->categorySlug = $categorySlug;
        $this->tutorId = $tutorId;
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

        // Apply eager loading and counts
        $courses = $query->withCount([
                'users as registered_count', 
                'comments', 
                'likes', 
                'shares', 
            ])
            ->with('price')
            ->limit(5)
            ->get();
        
        // --- Transformation Logic ---
        $items = $courses->map(function ($course) {
            $priceValue = $course->price ? $course->price->amount : 0;
            $priceFormatted = ($priceValue == 0) ? 'Free' : '₦' . number_format($priceValue);

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
                'link' => route('courses.show', $course),
                'button_text' => 'Register',
            ];
        });

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
    }
    
    // Method to be called when a button is clicked
    public function setFilter(string $type): void
    {
        $this->filterType = $type;
    }
}