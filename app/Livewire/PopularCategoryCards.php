<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Url;

class PopularCategoryCards extends Component
{
    // Binds the property to the URL query string
    #[Url(history: true)] 
    public string $search = '';

   public int $limit = 6; // Display only 4 categories initially

    public function render()
    {
        $query = Category::query();
        
        // 1. Apply Search Filter
        $query->when($this->search, function ($q) {
            $q->where('name', 'like', '%' . $this->search . '%');
        });
        
        // 2. Apply Ordering and Count
        $query->withCount('courses') 
              ->orderBy('courses_count', 'desc');
              
        // 3. Apply LIMIT only if NO search term is active
        if (empty($this->search)) {
            $query->limit($this->limit);
        }
        
        $categories = $query->get();

   $showSeeAll = empty($this->search) && $categories->count() == $this->limit;
    $totalCategoryCount = Category::count();

    return view('livewire.popular-category-cards', [
        'categories' => $categories,
        'showSeeAll' => $showSeeAll,
        'totalCategoryCount' => $totalCategoryCount,
    ]);
    }

    /**
     * Required by the reusable search component.
     * Since filtering is handled by wire:model.live, this just ensures the button works.
     */
    public function performSearch(): void
    {
    }
}