<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AlunoAutenticado;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('support', [HomeController::class, 'support'])->name('support');

Route::view('about', 'about')->name('about');
Route::view('courses', 'courses')->name('courses');

Route::controller(AuthController::class)->prefix('auth')->group(function () {
    Route::get('register', 'registerForm')->name('register');
    Route::post('register', 'register')->name('perform-registration');
    Route::get('login', 'loginForm')->name('login');
    Route::post('login', 'login')->name('perform-login');
});

Route::get('dashboard', DashboardController::class)->name('dashboard');
Route::middleware(AlunoAutenticado::class)->get('/dashboard',DashboardController::class)->name('dashboard');
