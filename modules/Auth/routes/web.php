<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Livewire\ForgetPassword;
use Modules\Auth\Livewire\Register;


Route::group(['middleware' => "guest"], function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/login',\Modules\Auth\Livewire\Login::class)->name('login');
    Route::get('/forget-password', ForgetPassword::class)->name('forget-password');
    Route::get('reset-password/{token}',\Modules\Auth\Livewire\ResetPassword::class)->name('password.reset');
});


Route::group(['middleware' => "auth"], function () {
    Route::get('email-verification',\Modules\Auth\Livewire\VerifyEmail::class)->name('verify-email');

    Route::get('/verify-email/{id}/{hash}',[\Modules\Auth\Http\Controllers\VerifyEmailController::class,'verify'])->name('verification.verify');

});

