<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('support', [HomeController::class, 'support'])->name('support');

Route::view('about', 'about')->name('about');
Route::view('courses', 'courses')->name('courses');

Route::controller(AuthController::class)->prefix('auth')->group(function () {
    Route::get('register', 'register')->name('register');
    Route::get('login', 'login')->name('login');
});
