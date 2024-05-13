<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
    Route::get('verify-email', [RegisteredUserController::class, 'verify_email'])->name('verify.email');

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'login_act']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
});

// Route::middleware('auth')->group(function () {
//     Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
// });
