<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardAlunoController;
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
    Route::get('logout', 'logout')->name('logout');
});

Route::middleware(AlunoAutenticado::class)->prefix('aluno')->group(function () {
    Route::controller(DashboardAlunoController::class)->group(function () {
        Route::get('dashboard', 'dashboard')->name('alunos.dashboard');
        Route::get('cursos', 'cursos')->name('alunos.cursos');
        Route::get('cursos/sala/{curso}', 'curso')->name('alunos.sala');
    });
});
