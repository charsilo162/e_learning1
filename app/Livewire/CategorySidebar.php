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

    public function updatedSearch(): void
    {
        // When search is updated, re-run the category query immediately.
        $this->loadCategories();
    }
    
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
    
    public function selectCategory(string $slug)
    {
        // This should redirect to the main course page with the category filter
        return $this->redirect(route('courses.index', ['category' => $slug]), navigate: true);
        
    }
}