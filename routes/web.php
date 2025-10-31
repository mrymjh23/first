<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Invoice',function (){
   return view('pdf.Invoice');
});

Route::get('/down/file/{file}',[\App\Http\Controllers\down::class,'down'] )->name('down');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
