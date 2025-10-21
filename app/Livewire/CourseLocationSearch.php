<?php

namespace App\Livewire;

use Livewire\Component;

class CourseLocationSearch extends Component
{
    // wire:model.live.debounce will update this property automatically
    public string $searchLocation = '';

    public function mount(string $searchLocation): void
    {
        $this->searchLocation = $searchLocation;
    }
    
    // Wire:model.live will handle most updates, but we need a method to dispatch the value
    // This is typically called when the property changes (e.g., via a property hook or an explicit wire:change)
    public function updatedSearchLocation($value)
    {
        // Dispatch event to the CourseList parent whenever the input value changes
        $this->dispatch('updateFilter', key: 'searchLocation', value: $value);
    }
    
    // Optional: Keep the explicit search method if not using wire:model.live
    public function doSearch(): void
    {
        $this->dispatch('updateFilter', key: 'searchLocation', value: $this->searchLocation);
    }


    public function render()
    {
        return view('livewire.course-location-search');
    }
}