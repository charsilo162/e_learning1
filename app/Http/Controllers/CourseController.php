<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @param  int  $id
     * @return \Illuminate\View\View
     */
// C:\xampp\htdocs\e_learning1\app\Http\Controllers\CourseController.php (or wherever your show method is)


public function show($id)
{
    
    $course = Course::withCount([
        'likes','comments','shares'
    ])
    ->with([
        'assignedTutor.user',  'uploader',  'centers' 
    ])
    ->findOrFail($id);
// dd($course);
    return view('courses.show', compact('course'));
}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
