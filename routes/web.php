<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('about', 'about-us');
Route::view('about-cat', 'about-cat-us');
Route::view('descrept', 'descrept');
Route::view('category', 'category');
Route::view('vedio', 'vedio');
Route::view('dash', 'dash');

// Home Route - name it 'home'
Route::view('/', 'welcome')->name('home');
Route::view('/home', 'home')->name('homes');

// Work Route - name it 'work'
Route::view('/about', 'about-us')->name('about-us');
Route::view('/category', 'category')->name('category');
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

Route::resource('courses', CourseController::class);
Route::view('/descrept', 'descrept')->name('reviews'); 
// Route::get('courses/{course}', [CourseController::class, 'show'])
//     ->name('courses.show');

//for registering couses
Route::view('/hall', 'hall')->name('enroll.course');



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
