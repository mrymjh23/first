<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/verify-link/{user}',function (Request $request) {
   if ($request->hasValidSignature()) {
       return 'ok';
   }
   return 'fail';
})->name('verify-link');

Route::get('/test', function () {
    $url = URL::temporarySignedRoute('verify-link', now()->addMinutes(30), ['user' => '5']);
    dd($url);
});




















