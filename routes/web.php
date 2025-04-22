<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('support', [HomeController::class, 'support'])->name('support');

Route::view('about', 'about')->name('about');
Route::view('courses', 'courses')->name('courses');

Route::view('dashboard', 'dashboard')->name('dashboard');

Route::controller(AuthController::class)->prefix('auth')->group(function () {
    Route::get('register', 'registerForm')->name('register');
    Route::post('register', 'register')->name('perform-registration');
    Route::get('login', 'loginForm')->name('login');
    Route::post('login', 'login')->name('login');
});
