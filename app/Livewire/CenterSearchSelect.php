<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Center; // 🛑 Assuming you have an Eloquent model for Center

class CenterSearchSelect extends Component
{
    public $searchTerm = '';
    public $centers = [];
    public $selectedId = null;
    public $selectedName = '';
    public $placeholder = 'Search or select a training center...';

    public function mount($initialId = null)
    {
        if ($initialId) {
            $this->selectedId = $initialId;
            $center = Center::find($initialId);
            if ($center) {
                $this->selectedName = $center->name;
            }
        }
        $this->loadInitialCenters();
    }

    public function loadInitialCenters()
    {
        // Load top 10 centers
        $this->centers = Center::limit(10)->get();
    }

    public function updatedSearchTerm($value)
    {
        if (strlen($value) < 2) {
            $this->loadInitialCenters();
            return;
        }

        $this->centers = Center::where('name', 'like', '%' . $value . '%')
                                ->limit(10)
                                ->get();
    }

    public function selectCenter($id, $name)
    {
        $this->selectedId = $id;
        $this->selectedName = $name;
        $this->searchTerm = ''; 
        
        // 🛑 Emit the event to update the parent component's property 🛑
        $this->dispatch('centerSelected', centerId: $id);
    }

    public function render()
    {
        return view('livewire.center-search-select');
    }
}