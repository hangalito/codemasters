<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::view('about', 'about')->name('about');
Route::view('courses', 'courses')->name('courses');
Route::view('support', 'support')->name('support');

Route::controller(AuthController::class)->prefix('auth')->group(function () {
    Route::get('register', 'register')->name('register');
    Route::get('login', 'login')->name('login');
});
