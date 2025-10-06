<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\Url;

class SimpleCategoryGrid extends Component
{
    // Binds the property to the URL query string. 
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
        // We'll order by course count to prioritize popular categories even in the simple grid
        $query->withCount('courses') 
              ->orderBy('courses_count', 'desc');
              
        // 3. Apply LIMIT only if NO search term is active
        if (empty($this->search)) {
            $query->limit($this->limit);
        }
        
        $categories = $query->get();

        return view('livewire.simple-category-grid', [
            'categories' => $categories,
        ]);
    }

    public function performSearch(): void
    {
        // Livewire's wire:model.live already handles filtering.
    }
}