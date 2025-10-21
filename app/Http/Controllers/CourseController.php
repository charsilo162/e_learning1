<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Center;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Show ONLINE course view
     * URL: /center/{course}
     */
    public function showOnline($courseId)
    {
        $course = Course::withCount(['likes', 'comments', 'shares'])
            ->with(['assignedTutor.user', 'uploader'])
            ->findOrFail($courseId);

        if ($course->type !== 'online') {
            abort(404, 'This course is not online.');
        }
// dd($course);
        return view('courses.show', compact('course'));
    }

    /**
     * Show HYBRID or PHYSICAL course view
     * URL: /center/{center}/{course}
     */
   public function showCenter($centerId, $courseId)
{
    // Load the course with its relationships (including centers)
    $course = Course::withCount(['likes', 'comments', 'shares'])
        ->with(['assignedTutor.user', 'uploader', 'centers'])
        ->findOrFail($courseId);

    // Make sure the course is physical or hybrid
    if (!in_array($course->type, ['physical', 'hybrid'])) {
        abort(404, 'This course is not a physical or hybrid course.');
    }

    // Get the related center from the loaded collection instead of lazy loading
    $center = $course->centers->firstWhere('id', $centerId);
//  dd($center);
    // If the center isn’t attached to this course, abort
    if (!$center) {
        abort(404, 'Center not found for this course.');
    }
// dd($course);
    // Render the specialized hybrid/physical view
    return view('courses.show-center', compact('course', 'center'));
}

}
