<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('author')->name('author.')->group(function(){
    Route::middleware(['guest:web'])->group(function(){
        Route::view('login','back.pages.auth.login')->name('login');
        Route::view('forgot-password','back.pages.auth.forgot')->name('forgot-password');
    });

    Route::middleware(['auth:web'])->group(function(){
        Route::get('home',[AuthController::class, 'home'])->name('home');
        Route::post('logout',[AuthController::class, 'logout'])->name('logout');
        Route::view('profile','back.pages.profile')->name('profile');
        Route::post('change-profile-picture',[AuthController::class, 'changeProfilePicture'])->name('change-profile-picture');
    });
});