<?php

namespace App\Livewire;

use App\Models\Course; // We need the Course model now
use Livewire\Component;

class RelatedCoursesByCenter extends Component
{
    // The ID you pass from the parent view (the Center's ID)
    public int $centerId; 

    public function mount(int $centerId)
    {
        $this->centerId = $centerId;
    }

    public function render()
    {
   
        // 1. Optimized Query: Filter Courses by the given Center ID
        $courses = Course::query()
            ->with('category') // Eager load the category for the course card
            ->whereHas('centers', function($query) {
                // Assuming the relationship is Course->belongsToMany(Center)
                $query->where('centers.id', $this->centerId);
            })
            // Example: Limit to 6 courses offered by this center
            ->limit(6) 
            ->get();
                
        // 2. Pass necessary props to the *new* shared Blade view (Course-specific list)
        return view('livewire.related-courses-by-center', [
            'courses' => $courses,
            'title' => 'Courses Offered by This Center',
            'showSearch' => false, // Always hide search for this contextual list
            'showSeeAll' => true,  // You might want a "See All Courses" link
        ]);
    }
}