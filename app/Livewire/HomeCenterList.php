<?php

namespace App\Livewire;

use App\Models\Center;
use Livewire\Component;
use Livewire\Attributes\Url;

class HomeCenterList extends Component
{
    public int $limit = 3; 
    #[Url(history: true)] 
    public string $search = '';

    public function render()
    {
        $query = Center::query();
        $query->with(['latestCourses.category']); 

        $query->when($this->search, function($q) {
            $q->where(function($subQuery) {
                // ... (Search logic remains the same)
                $subQuery->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('address', 'like', '%' . $this->search . '%')
                    ->orWhere('city', 'like', '%' . $this->search . '%')
                    ->orWhereHas('latestCourses', function($courseQuery) {
                        $courseQuery->where('name', 'like', '%' . $this->search . '%');
                    });
            });
        });

        $query->orderByDesc('years_of_experience'); 
        if (empty($this->search)) {
            $query->limit($this->limit);
        }
        
        $centers = $query->get();
        $totalCenterCount = Center::count();
        
        $showSeeAll = true; 
          return view('livewire.home-center-list', [
            'centers' => $centers,
            'totalCenterCount' => $totalCenterCount,
            'showSeeAll' => $showSeeAll, // This forces the button to appear
        ]);
    }
    
    public function performSearch(): void
    {
        // ...
    }
}