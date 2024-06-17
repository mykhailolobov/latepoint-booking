<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
    Route::get('verify-email', [RegisteredUserController::class, 'verify_email'])->name('verify.email');

    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'login_act']);

    Route::get('oauth/{driver}', [AuthenticatedSessionController::class, 'redirectToProvider'], )->name('social.oauth');
    Route::get('oauth/{driver}/callback', [AuthenticatedSessionController::class, 'handleProviderCallback'])->name('social.callback');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.update');


    Route::get('verify/{token}', [RegisteredUserController::class, 'verifyAccount'])->name('verify');
});

Route::middleware('auth')->group(function () {

    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout-act');
});
