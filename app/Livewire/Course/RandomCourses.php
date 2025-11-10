<?php
namespace App\Livewire\Course;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Course;
use App\Models\Video; // Used for the default thumbnail

class RandomCourses extends Component
{
    public $courses;
   public function mount()
{
    $firstVideoPivotSubquery = DB::table('course_video')
        ->select('order_index')
        ->whereColumn('course_id', 'courses.id')
        ->orderBy('order_index')
        ->limit(1);
    $firstVideoIdSubquery = DB::table('course_video')
        ->select('video_id')
        ->whereColumn('course_id', 'courses.id')
        ->orderBy('order_index')
        ->limit(1);
    $this->courses = Course::query()
        ->whereHas('currentPrice') 
        ->inRandomOrder()
        ->limit(4) 
        ->with('currentPrice')
        ->addSelect([
            'first_video_part' => $firstVideoPivotSubquery,
            'first_video_id' => $firstVideoIdSubquery,     
        ])
        ->get();
     
}


    public function render()
    {
        return view('livewire.course.random-courses');
    }

    // Helper to get dummy data if your Course model doesn't have image/old_price fields
    private function getDummyCourseData($course)
    {
        $currentPrice = $course->currentPrice->amount ?? 7000;
        // Mock an old price for demonstration, or fetch from a 'previous_price' field if it exists
        $oldPrice = $currentPrice + 1000; 

        // Get the first video from the relation
        $firstVideo = $course->videos->first();
 
        return [
            'id' => $course->id,
            'title' => $course->title,
            'description' => $course->description ?? 'Course description not set.',
            'image' => asset('storage/img3.png'), // Use a default or the first video's thumbnail URL
            'badge' => 'PART ' . ($firstVideo->pivot->order_index ?? 1),
            'price' => $currentPrice,
            'old_price' => $oldPrice, // You may need a proper old price logic
        ];
    }
}