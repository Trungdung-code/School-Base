<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\UserController;

Route::middleware('guest')->group(function () {
        Route::get('login', [UserController::class, 'login'])
            ->name('login');
        Route::post('login-phone-post', [UserController::class, 'store'])->name('login.store');
});

Route::get('/users-logout', [UserController::class, 'destroy'])
    ->name('user.logout')->middleware('auth');

