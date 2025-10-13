<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Url; 
use App\Models\Category; // Assuming your Category model is here

class CategorySidebar extends Component
{
    // Property to hold the search query, linked to the input box.
    // Use #[Url] to persist the search query in the browser URL.
    #[Url(as: 'category_search', except: '')]
    public string $search = '';

    // Property to hold the retrieved categories
    public $categories = [];
    
    // An optional property to hold the currently selected category slug 
    // to highlight it in the sidebar (useful if this component is on the course index page)
    public ?string $activeCategorySlug = null; 

    /**
     * The `boot` method is a good place to initialize data based on the route.
     * We'll ensure the initial search is run on load if a query is present in the URL.
     */
    public function boot(): void
    {
        $this->search = request('category_search', '');
        // Fetch initial categories when component loads
        $this->loadCategories(); 
    }

    /**
     * Updated every time the $search property changes (via wire:model.live.debounce).
     */
    public function updatedSearch(): void
    {
        // When search is updated, re-run the category query immediately.
        $this->loadCategories();
    }
    
    /**
     * Performs the database query to fetch the categories.
     */
    protected function loadCategories(): void
    {
        $query = Category::query();
        
        // 1. Apply Search Filter
        if (!empty($this->search)) {
            $query->where('name', 'like', '%' . $this->search . '%')
                  ->orWhere('slug', 'like', '%' . $this->search . '%');
        }

        // 2. Limit the results to 10 as requested
        $this->categories = $query->limit(10)->get();
    }

    public function render()
    {
        return view('livewire.category-sidebar');
    }
    
    /**
     * Method to be called when a category link is clicked.
     * It redirects or emits an event to the main CourseList component.
     */
    public function selectCategory(string $slug)
    {
        // This should redirect to the main course page with the category filter
        return $this->redirect(route('courses.index', ['category' => $slug]), navigate: true);
        
        // OR if the CourseList component is on the same page, you could use:
        // $this->dispatch('categorySelected', categorySlug: $slug);
    }
}