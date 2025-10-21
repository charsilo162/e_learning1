<?php

namespace App\Livewire;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditCourse extends Component
{
    use WithFileUploads;

    // Property to hold the course being edited
    public ?Course $course = null;

    // Properties for Course details
    public $category_id;
    public $title;
    public $description;
    public $image_thumb; // This will only hold *new* uploads
    public $type = 'online';
    public $center_id = null;

    public $showModal = false;

    // Listen for a *different* event to open this modal
    protected $listeners = [
        'openEditCourseModal' => 'openModal',
        'categorySelected' => 'setCategory',
        'centerSelected' => 'setCenter',
    ];

    /**
     * Load the course data into the component's properties
     * when the 'openEditCourseModal' event is received.
     */
    public function openModal($courseId)
    {
        // Eager load centers relation to get center_id
        $this->course = Course::with('centers')->find($courseId);

        if (!$this->course) {
            // Handle case where course isn't found
            $this->dispatch('error-notification', message: 'Error: Course not found.');
            return;
        }

        // Populate all form properties from the loaded course
        $this->category_id = $this->course->category_id;
        $this->title = $this->course->title;
        $this->description = $this->course->description;
        $this->type = $this->course->type;
        $this->center_id = $this->course->centers->first()->id ?? null; // Get first attached center
        $this->image_thumb = null; // Clear any old file input
        
        // Clear previous validation errors
        $this->resetErrorBag(); 

        $this->showModal = true;
    }

    // Dynamic validation rules for *updating*
    public function getRules()
    {
        // We must have a course loaded to create rules
        if (!$this->course) {
            return [];
        }

        return [
            'category_id' => 'required|integer|exists:categories,id',
            
            // IMPORTANT: The unique rule *must* ignore the current course's ID
            'title' => 'required|string|max:100|unique:courses,title,' . $this->course->id,
            
            'description' => 'required|string',
            'type' => 'required|in:physical,online',
            'center_id' => $this->type === 'physical' ? 'required|integer|exists:centers,id' : 'nullable',
            
            // 'nullable' allows submitting the form without a *new* image
            'image_thumb' => 'nullable|image|max:1024', 
        ];
    }

    // This hook clears the center_id if user switches type to 'online'
    public function updatedType($value)
    {
        if ($value === 'online') {
            $this->center_id = null;
        }
    }

    public function setCategory($categoryId)
    {
        $this->category_id = $categoryId;
    }

    public function setCenter($centerId)
    {
        $this->center_id = $centerId;
    }

    /**
     * The main action to update the course.
     */
    public function updateCourse()
    {
        if (!$this->course) return; // Safety check

        $this->validate($this->getRules());

        // Start with the existing image path
        $imagePath = $this->course->image_thumbnail_url;

        // Check if a *new* image has been uploaded
        if ($this->image_thumb) {
            // 1. Delete the old image from storage, if it exists
            if ($this->course->image_thumbnail_url) {
                Storage::disk('public')->delete($this->course->image_thumbnail_url);
            }
            
            // 2. Store the new image and get its path
            $imagePath = $this->image_thumb->store('courses', 'public');
        }

        // Update the course model
        $this->course->update([
            'category_id' => $this->category_id,
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'description' => $this->description,
            'image_thumbnail_url' => $imagePath,
            'type' => $this->type,
            // 'uploader_user_id' is usually not updated
        ]);

        // Handle the pivot table relationship
        if ($this->type === 'physical' && $this->center_id) {
            // sync() is for updates: it detaches old centers and attaches the new one.
            $this->course->centers()->sync([$this->center_id => [
                'price' => null, // Add your other pivot data here if needed
                'start_date' => null,
                'end_date' => null,
            ]]);
        } else {
            // If type is 'online', detach all centers
            $this->course->centers()->detach();
        }

        // Close modal, dispatch success, and reset all public properties
        $this->showModal = false;
        $this->dispatch('success-notification',
            message: '✅ Success! Course has been updated.',
            type: 'course'
        );
        $this->reset(); // Resets all public properties to their defaults (null, false, etc.)
    }

    public function render()
    {
        // Renders the new view file
        return view('livewire.edit-course');
    }
}