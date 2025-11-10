<?php
namespace App\Livewire\Course;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CourseManager extends Component
{
    use WithFileUploads;

    public $courses;
    public $showModal = false;

    // Form fields
    public $course_id;
    public $category_id;
    public $title;
    public $description;
    public $image_thumb;
    public $type = 'online';
    public $center_id;

    // 🚀 CORRECTLY PLACED LISTENERS ARRAY
    protected $listeners = [
        'course-updated' => '$refresh',
        'edit-course' => 'loadCourse',
        'openPostCourseModal' => 'openModal', // From post-course-button
        'categorySelected' => 'setCategory', // From category-search-select
        'centerSelected' => 'setCenter',     // From center-search-select
    ];
    
    public function mount()
    {
        $this->loadCourses();
    }

    // 🚀 GUARANTEES COURSES ARE LOADED WITH RELATIONSHIPS
    public function loadCourses()
    {
        $userId = Auth::id() ?? 1;

        $this->courses = Course::where('uploader_user_id', $userId)
            ->withCount([
                'comments',
                'shares',
                'likes as likes_count' => fn($q) => $q->where('type', 'up'),
                'likes as dislikes_count' => fn($q) => $q->where('type', 'down'),
            ])
            ->with(['currentPrice', 'centers'])
            ->latest()
            ->get();
    }

    public function getRules()
    {
        return [
            'category_id' => 'required|integer|exists:categories,id',
            'title' => 'required|string|max:100|unique:courses,title,' . $this->course_id,
            'description' => 'required|string',
            'type' => 'required|in:physical,online',
            'center_id' => $this->type === 'physical' ? 'required|integer|exists:centers,id' : 'nullable',
            'image_thumb' => 'nullable|image|max:1024',
        ];
    }

    public function openModal()
    {
        $this->resetForm();
        $this->showModal = true;
        $this->loadCourses(); // 💡 Defensive reload to prevent LazyLoadingViolation on re-render
    }

    public function loadCourse($courseId)
    {
        // Find course and eager load related centers
        $course = Course::with('centers')->findOrFail($courseId);

        // Populate form fields for editing
        $this->course_id = $course->id;
        $this->category_id = $course->category_id;
        $this->title = $course->title;
        $this->description = $course->description;
        $this->type = $course->type;
        $this->center_id = $course->centers->first()->id ?? null;
        
        $this->showModal = true;
        $this->loadCourses(); // 💡 Defensive reload to prevent LazyLoadingViolation on re-render
    }

    public function saveCourse()
    {
        $this->validate();

        $imagePath = $this->image_thumb ? $this->image_thumb->store('courses', 'public') : null;
        $uploaderId = Auth::id() ?? 1;
        $slug = Str::slug($this->title);

        $data = [
            'category_id' => $this->category_id,
            'uploader_user_id' => $uploaderId,
            'title' => $this->title,
            'slug' => $slug,
            'description' => $this->description,
            'image_thumbnail_url' => $imagePath,
            'type' => $this->type,
        ];

        if ($this->course_id) {
            $course = Course::findOrFail($this->course_id);
            $course->update($data);
        } else {
            $course = Course::create($data);
        }

        if ($this->type === 'physical' && $this->center_id) {
            // Use sync to create/update the pivot record, ensures only one center is linked
            $course->centers()->sync([$this->center_id => [
                'price' => null,
                'start_date' => null,
                'end_date' => null,
            ]]);
        }

        $this->dispatch('success-notification', message: '🎉 Course saved successfully!');
        $this->showModal = false;
        $this->resetForm();
        $this->loadCourses(); // Reload after saving to show new/updated course
    }

    public function deleteCourse($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        $this->dispatch('success-notification', message: 'Course deleted successfully.');
        $this->loadCourses(); // Reload after deleting
    }

    private function resetForm()
    {
        $this->reset(['course_id', 'category_id', 'title', 'description', 'image_thumb', 'type', 'center_id']);
        $this->type = 'online';
    }

    // 🚀 NEW: Setter methods for child search-select components
    public function setCategory($categoryId)
    {
        $this->category_id = $categoryId;
    }

    public function setCenter($centerId)
    {
        $this->center_id = $centerId;
    }

    public function render()
    {
        return view('livewire.course.course-manager');
    }
}