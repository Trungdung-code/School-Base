<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use App\Http\Controllers\Student\Auth\AuthenticatedController;
use App\Http\Controllers\Student\Auth\SignupController;
use App\Http\Controllers\Admin\UserController;

// Route::middleware('guest')->group(function () {
//     Route::get('admin/login', [UserController::class, 'login'])
//         ->name('login');
//     Route::post('login-phone-post', [UserController::class, 'store'])->name('login.store');
// });

// Route::get('/users-logout', [UserController::class, 'destroy'])
//     ->name('user.logout')->middleware('auth');

Route::middleware('guest')->group(function () {
        Route::get('login', [AuthenticatedController::class, 'login'])
        ->name('student.login');
        Route::post('login-student-process', [AuthenticatedController::class, 'store'])
        ->name('login-student-process');

        Route::get('signup', [SignupController::class, 'signup'])
        ->name('signup');
        Route::post('signup-process', [SignupController::class, 'store'])
        ->name('signup-process');
    });



Route::middleware('guest')->group(function () {
    Route::get('admin/register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register-process', [RegisteredUserController::class, 'store'])
        ->name('register-process');

    Route::get('admin/login', [AuthenticatedSessionController::class, 'login'])
        ->name('login');

    Route::post('login-process', [AuthenticatedSessionController::class, 'store'])
        ->name('login.process');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::get('student-logout', [AuthenticatedController::class, 'destroy'])
    ->name('student.logout');
});
