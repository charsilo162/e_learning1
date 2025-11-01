<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\EvenueService;

class FeaturedVenues extends Component
{
    public $venues = [];

    public function mount(EvenueService $service)
    {
        $this->venues = $service->getFeaturedVenues(4);
    }

    public function render()
    {
        return view('livewire.featured-venues');
    }
}