<?php

namespace App\Livewire;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class PostCourse extends Component
{
     use WithFileUploads;
    // Properties for Course details
    public $category_id;
    public $title;
    public $description;
    public $image_thumb; // Use Livewire for file uploads if needed
  public $type = 'online';

    public $center_id = null;
//public $centers = []; // will hold the preload options
    public $showModal = false; // State to control the modal visibility
    protected $listeners = [
        'openPostCourseModal' => 'openModal', 
        'categorySelected' => 'setCategory', 
         'centerSelected' => 'setCenter', // new one
    ];
  public function openModal()
    {
        $this->showModal = true;
    }
    // Dynamic validation rules based on type
public function getRules()
{
    return [
        'category_id' => 'required|integer|exists:categories,id',
        'title' => 'required|string|max:100|unique:courses,title',
        'description' => 'required|string',
        'type' => 'required|in:physical,online', 
        
        // This dynamic rule is now correctly placed within a public method
        'center_id' => $this->type === 'physical' ? 'required|integer|exists:centers,id' : 'nullable',
        
        'image_thumb' => 'nullable|image|max:1024',
    ];
}



    
   public function setCategory($categoryId)
    {
        $this->category_id = $categoryId;
    }
public function setCenter($centerId)
{
    $this->center_id = $centerId;
}
    public function postCourse()
    {
    
      
        $this->validate();
       
       
         $imagePath = null;
    if ($this->image_thumb) {
             // Store the file and get the path (e.g., 'courses/abc.jpg')
            $imagePath = $this->image_thumb->store('courses', 'public');
        }
        // 2. Reset fields and close modal
         $courseSlug = Str::slug($this->title);
     
         //$uploaderId = Auth::id(); 
         $uploaderId = 1; 
        //    dump($this->category_id);
    
     $course = Course::create([
            'category_id' => $this->category_id,
            'uploader_user_id' => $uploaderId,
            'title' => $this->title,
            'slug' => $courseSlug, // Course slug (based on title)
            'description' => $this->description,
            'image_thumbnail_url' => $imagePath,
            'type' => $this->type,
        ]);
        // Attach to pivot table if physical
if ($this->type === 'physical' && $this->center_id) {
    $course->centers()->attach($this->center_id, [
        'price' => null,
        'start_date' => null,
        'end_date' => null,
    ]);
}
        // Optional: Emit an event to notify other components
        $this->reset(['category_id', 'title', 'description', 'image_thumb', 'type']);
        $this->showModal = false;
        $this->dispatch('success-notification', 
        message: '🎉 Success! Your course has been posted.',
        type: 'course'
    );
    }

    public function render()
    {
        // Renders a simple, almost empty view that just includes the reusable modal
        return view('livewire.post-course');
    }
}