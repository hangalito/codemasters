<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('about', 'about')->name('about');
Route::view('courses', 'courses')->name('courses');
Route::view('support', 'support')->name('support');

Route::prefix('auth')->group(function () {
    Route::view('login', 'auth.login')->name('login');
    Route::view('register', 'auth.register')->name('register');
});
