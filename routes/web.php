<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/posts', [PostController::class,'index']);
Route::post('/login', [PostController::class,'index']);
// Route::resource('posts', PostController::class);
