<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('about', 'about-us');
Route::view('about-cat', 'about-cat-us');
Route::view('descrept', 'descrept');
Route::view('category', 'category');
Route::view('vedio', 'vedio');
Route::view('dash', 'dash');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
