<?php
namespace App\Livewire\Course;
use Livewire\Component;

class CourseFilterBar extends Component
{
    // These properties are bound via wire:model or passed from the parent CourseList component
    public string $filterType = 'all';
    public string $filterPrice = 'all';
    public string $searchLocation = '';

    // Event listeners to handle updates from children (Price, Type, Location components)
    protected $listeners = [
        'updateFilter' => 'handleFilterUpdate',
    ];

  public function handleFilterUpdate(string $key, $value): void
{
    $this->$key = $value;
    $this->dispatch('updateFilter', key: $key, value: $value); // To CourseList
}
    public function clearAllFilters(): void
    {
          $this->dispatch('clearAllFilters'); 
        $this->filterType = 'all';
        $this->filterPrice = 'all';
        $this->searchLocation = '';
        
        // Emit event up to the main CourseList/CourseFilter component
        // $this->dispatch('filtersCleared');
       
    }

    public function render()
    {
        return view('livewire.course.course-filter-bar');
    }
}