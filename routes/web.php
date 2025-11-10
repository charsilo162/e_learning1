<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseWatchController;
use App\Http\Controllers\MyVideosController;
use App\Http\Controllers\PaystackController;
use App\Http\Controllers\ProfileController;

use App\Livewire\Course\NoVideoCourses;
use App\Livewire\CourseWatch;
use App\Livewire\VenueList;
use App\Livewire\VenueDetail;


/*
|--------------------------------------------------------------------------
| STATIC PAGES (Public)
|--------------------------------------------------------------------------
*/
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout')->middleware('auth');




Route::view('/', 'home.index')->name('home');
Route::view('/home', 'home.index')->name('homes');

Route::view('/about', 'about-us')->name('about-us');
Route::view('/categories', 'category')->name('category');
Route::view('/dash', 'dash')->name('dash');
Route::view('/vedio', 'vedio')->name('vedio');
Route::view('/faqs', 'faq')->name('faqs');
Route::view('/descrept', 'descrept')->name('reviews');

// Route::view('/about-cat', 'about-cat-us');
Route::view('/signup', 'signup');
Route::view('/login1', 'login1');
Route::view('/tutor', 'tutor');



/*
|--------------------------------------------------------------------------
| CATEGORY ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');



/*
|--------------------------------------------------------------------------
| COURSE ROUTES
|--------------------------------------------------------------------------
*/

// ONLINE course page (single course)
Route::prefix('course')->group(function () {
    Route::get('/{course}', [CourseController::class, 'showOnline'])
        ->name('courses.online');
});

// HYBRID/PHYSICAL courses based on centers
Route::prefix('center')->group(function () {
    Route::get('/{center}/{course}', [CourseController::class, 'showCenter'])
        ->name('courses.center');
});

// Course watching page (guarded)
Route::get('/course/{course}/watch', [CourseWatchController::class, 'CourseWatch'])
    ->middleware(['auth'])
    ->name('course.watch');



/*
|--------------------------------------------------------------------------
| COURSE ENROLLMENT (PAYSTACK)
|--------------------------------------------------------------------------
*/

Route::get('/enroll/paystack/{course}', [PaystackController::class, 'redirectToGateway'])
    ->name('enroll.course');

Route::get('/payment/callback', [PaystackController::class, 'handleGatewayCallback'])
    ->name('payment.callback');



/*
|--------------------------------------------------------------------------
| VENUE ROUTES (LIVEWIRE)
|--------------------------------------------------------------------------
*/

Route::get('/venues', VenueList::class)->name('venues');

// detail page
Route::get('/venues/{slug}', VenueDetail::class)->name('venues.show');



/*
|--------------------------------------------------------------------------
| AUTHENTICATED USER ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::view('profile', 'profile')->name('profile');
    Route::view('profile2', 'profile2')->name('profile2');

    Route::get('/my-course', [CourseController::class, 'mycourse'])->name('my.course');

    Route::get('/my-videos', [MyVideosController::class, 'index'])->name('my.videos');

    Route::get('/draftvideo', [MyVideosController::class, 'draft'])
        ->name('courses.no-video');
});



/*
|--------------------------------------------------------------------------
| FALLBACK
|--------------------------------------------------------------------------
*/

Route::fallback(function () {
    return view('errors.404');
});


require __DIR__.'/auth.php';
