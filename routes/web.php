<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseWatchController;
use App\Http\Controllers\PaystackController;
use App\Http\Controllers\ProfileController;
use App\Livewire\CourseWatch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('about', 'about-us');
Route::view('about-cat', 'about-cat-us');
Route::view('descrept', 'descrept');
Route::view('category', 'category');
Route::view('vedio', 'vedio');
Route::view('signup', 'signup');
Route::view('login1', 'login1');
Route::view('tutor', 'tutor');
Route::view('dash', 'dash');
Route::view('profile2', 'profile2');



// Home Route - name it 'home'
Route::view('/', 'welcome')->name('home');
Route::view('/home', 'home')->name('homes');

// Work Route - name it 'work'
Route::view('/about', 'about-us')->name('about-us');
Route::view('/categories', 'category')->name('category');
Route::view('/dash', 'dash')->name('dash');
Route::view('/about-cat', 'about-cat-us')->name('about-cat');
Route::view('/vedio', 'vedio')->name('vedio');
Route::view('/faqs', 'faq')->name('faqs');
Route::view('/hall', 'hall')->name('hall');

Route::view('/categories', 'about-us')->name('categories.index');
Route::view('/categories_show', 'about-us')->name('categories.show');
Route::view('/categories_show', 'about-us')->name('courses.show');
Route::view('/categories_show', 'about-us')->name('centers.show');
// Route::view('/categories_show/{slug}', 'about-us')->name('centers.show');

// Route::resource('courses', CourseController::class);

Route::get('/course/{course}/watch', [CourseWatchController::class, 'CourseWatch'])
    ->middleware(['auth'])
    ->name('course.watch');
Route::get('/course/{course}/watch', function (App\Models\Course $course) {
    // Optional: Add authorization check here if you prefer a traditional route file structure
    if (!Auth::check() || !$course->users->contains(Auth::id())) {
        abort(403, 'You are not enrolled in this course.');
    }

    return view('courses.watch', compact('course'));
})->middleware(['auth'])->name('course.watch');

Route::prefix('center')->group(function () {
    // HYBRID or PHYSICAL COURSES → /center/{center}/{course}
    Route::get('/{center}/{course}', [CourseController::class, 'showCenter'])
        ->name('courses.center');


});
Route::prefix('course')->group(function () {
  
    // ONLINE COURSES → /course/{course}
    Route::get('/{course}', [CourseController::class, 'showOnline'])
        ->name('courses.online');
});



Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');

Route::view('/descrept', 'descrept')->name('reviews'); 
// Route::get('courses/{course}', [CourseController::class, 'show'])
//     ->name('courses.show');

//for registering couses
// Route::view('/hall', 'hall')->name('enroll.course');

Route::get('/enroll/paystack/{course}', [PaystackController::class, 'redirectToGateway'])
    ->name('enroll.course'); // Keep this name, but change the URI/controller

// Route for Paystack to return to after payment attempt
Route::get('/payment/callback', [PaystackController::class, 'handleGatewayCallback'])
    ->name('payment.callback');


    
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



    //api
// routes/web.php
use App\Livewire\VenueList;

Route::get('/', function () {
    return view('welcome');   // your home page with <livewire:featured-venues />
})->name('home');

Route::get('/venues', VenueList::class)->name('venues');

Route::get('/venues/{slug}', function ($slug) {
    // optional: a detail page – you can create another Livewire component
    return view('venues.show', compact('slug'));
})->name('venues.show');
// routes/web.php
Route::get('/venues/{slug}', \App\Livewire\VenueDetail::class)->name('venues.show');
require __DIR__.'/auth.php';
