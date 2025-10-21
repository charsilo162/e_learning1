<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category; // 🛑 Import your Model

class CategorySearchSelect extends Component
{
    // Properties managed by the search component
    public $searchTerm = '';       // What the user types in the search box
    public $categories = [];       // The list of categories to display (initial or search results)
    public $selectedId = null;     // The ID of the currently selected category
    public $selectedName = '';     // The Name of the currently selected category (for display)
    public $placeholder = 'Search or select a category...';

    // 1. Initial Load: Load some categories when the component starts
    public function mount($initialId = null)
    {
        // If an ID was previously saved (e.g., in a draft), load its name
        if ($initialId) {
            $category = Category::find($initialId);
            if ($category) {
                $this->selectedId = $initialId;
                $this->selectedName = $category->name;
            }
        }
        $this->loadInitialCategories();
    }

    public function loadInitialCategories()
    {
        // Get the first 10 categories to show when the dropdown first opens
        $this->categories = Category::limit(10)->get();
    }

    // 2. Search Logic: Automatically runs when $searchTerm changes (because of wire:model.live)
    public function updatedSearchTerm($value)
    {
        if (strlen($value) < 2) {
            $this->loadInitialCategories();
            return;
        }

        // Search the database based on what the user is typing
        $this->categories = Category::where('name', 'like', '%' . $value . '%')
                                    ->limit(10)
                                    ->get();
    }

    // 3. Selection: Runs when the user clicks a result
    public function selectCategory($id, $name)
    {
        $this->selectedId = $id;
        $this->selectedName = $name;
        $this->searchTerm = ''; // Clears search box after selection
        
        // 🛑 CRITICAL STEP: Tell the PARENT component (PostCourse) the ID 🛑
        $this->dispatch('categorySelected', categoryId: $id);
    }

    public function render()
    {
        return view('livewire.category-search-select');
    }
}