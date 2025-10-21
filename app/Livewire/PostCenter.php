<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use App\Models\Center;
class PostCenter extends Component
{
     use WithFileUploads;
 
       // Properties for Center details (already defined)
    public $name;
    public $address;
    public $description;
    public $city;
    public $years_of_experience;
    public $center_thumbnail_url; 
    public $showModal = false; // State to control the modal visibility
    protected $listeners = [
        'openPostCenterModal' => 'openModal', 
    ];
    public function openModal()
    {
        $this->showModal = true;
    }

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'address' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'years_of_experience' => 'required|integer|min:0',
        'center_thumbnail_url'  => 'nullable|image|max:1024', // Example rule
    ];

   public function postCenter()
    {
        $this->validate();

        $imagePath = null;
        if ($this->center_thumbnail_url) {
            // Store the file and get the path (e.g., 'centers/abc.jpg')
            $imagePath = $this->center_thumbnail_url->store('centers', 'public');
        }

        // --- 1. Logic to save the center to the database ---
        Center::create([
            'name' => $this->name,
            'address' => $this->address,
            'description' => $this->description,
            'city' => $this->city,
            'years_of_experience' => $this->years_of_experience,
            'center_thumbnail_url' => $imagePath, // Save the path here
        ]);
        
        // --- 2. Reset fields and close modal ---
        $this->reset(['name', 'address', 'description', 'city', 'years_of_experience', 'center_thumbnail_url']);
        $this->showModal = false;
        $this->dispatch('success-notification', 
        message: '🥳 Success! Your training center has been posted.',
        type: 'center'
    );
    }

    public function render()
    {
        // Renders a simple, almost empty view that just includes the reusable modal
        return view('livewire.post-center');
    }
}