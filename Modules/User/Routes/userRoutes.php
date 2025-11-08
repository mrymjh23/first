<?php

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\Auth\ConfirmPasswordController;
use Modules\User\Http\Controllers\Auth\ForgotPasswordController;
use Modules\User\Http\Controllers\Auth\LoginController;
use Modules\User\Http\Controllers\Auth\RegisterController;
use Modules\User\Http\Controllers\Auth\ResetPasswordController;
use Modules\User\Http\Controllers\Auth\VerificationController;

Route::group([
    'middleware' => 'web'
], function ($router) {
//    Auth::routes(['verify' => true]);
    Route::post('/email/resend',[VerificationController::class,'resend'])->name('verification.resend')->middleware('auth');
    Route::get('/email/verify',[VerificationController::class,'show'])->name('verification.notice')->middleware('auth');
    Route::get('/ email/verify/{id}/{hash}',[VerificationController::class,'verify'])->name('verification.verify');
    Route::get('/login', [LoginController::class, 'showLoginForm' ])->name('login');
    Route::post('/login', [LoginController::class, 'login' ])->name('login');
    Route::post('/logout', [LoginController::class, 'logout' ])->name('logout')->middleware('auth');
    Route::get('/register', [RegisterController::class, 'showRegistrationForm' ])->name('register');
    Route::post('/register', [RegisterController::class, 'register' ])->name('register');
    Route::get('/password/confirm', [ConfirmPasswordController::class, 'showConfirmForm' ])->name('password.confirm');
    Route::post('/password/confirm',[ConfirmPasswordController::class, 'confirmPassword' ])->name('password.confirm');
    Route::post('password/email',[ForgotPasswordController::class, 'sendResetLinkEmail' ])->name('password.email');
    Route::get('/password/reset',[ForgotPasswordController::class, 'showLinkRequestForm' ])->name('password.reset');
    Route::post('/password/reset',[ResetPasswordController::class, 'reset' ])->name('password.reset');
    Route::get('/password/reset/{token}',[ResetPasswordController::class, 'showResetForm' ])->name('password.reset');
});
