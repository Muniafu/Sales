<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\DealController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Authentication routes

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('signup');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/deals', [DealController::class, 'store'])->name('deals.store');
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.submit');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [PasswordController::class, 'showForgotPasswordForm'])->name('password.request');
Route::get('/home', function () {return view('home');})->name('home');
