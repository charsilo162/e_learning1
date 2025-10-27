<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course; // Import the Course model

class CourseWatchController extends Controller
{
    /**
     * Handles the request for the course watch page.
     * Uses Route Model Binding to automatically fetch the Course model.
     *
     * @param  \App\Models\Course  $course The course model instance resolved by the route ID.
     * @return \Illuminate\Contracts\View\View
     */
    public function CourseWatch(Course $course)
    {
        // $course now holds the fully loaded Course model for the given ID.
        // We pass the entire model to the view.
        return view('courses.watch', [
            'course' => $course
        ]);
    }
}
