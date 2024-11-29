<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Home page route
Route::get('/', function () {
    return view('home');
})->name('home');

// Public routes
Route::view('/register', 'register')->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::view('/login', 'login')->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Protected routes (requires authentication)
Route::middleware('auth')->group(function () {
    // Dashboard route (home for authenticated users)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');  // View profile
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');  // Edit profile form
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');  // Update profile

    // Change password routes
    Route::get('/profile/change-password', [ProfileController::class, 'changePasswordForm'])->name('profile.change-password.form');  // Form to change password
    Route::post('/profile/change-password', [ProfileController::class, 'changePassword'])->name('profile.change-password');  // Handle password change

    // Logout route
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
