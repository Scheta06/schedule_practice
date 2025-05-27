<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('loginForm');
Route::post('/login', [LoginController::class, 'update'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('registerForm');
Route::post('/register', [RegisterController::class, 'create'])->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [LoginController::class, 'index'])->name('logout');

    Route::get('/cars', [CarController::class, 'index'])->name('userCars');
    Route::get('/cars/{id}', [CarController::class, 'show'])->name('carCart');
});
