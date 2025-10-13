<?php
namespace App\Livewire;

use App\Models\Category; // Assuming you have a Category model
use Livewire\Component;

class CourseCategorySidebar extends Component
{
    // This links to the main course list page, filtering by category
    public function redirectToCategory(string $slug)
    {
        return $this->redirect(route('courses.category', ['categorySlug' => $slug]), navigate: true);
        // Or use a more general route:
        // return $this->redirect(route('courses.index', ['category' => $slug]), navigate: true);
    }

    public function render()
    {
        $categories = Category::query()
                            ->where('is_course_category', true) // optional filtering
                            ->get();

        return view('livewire.course-category-sidebar', [
            'categories' => $categories,
        ]);
    }
}