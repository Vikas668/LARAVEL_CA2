<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
   return view('about');
});

Route::get('/inspiration', function () {
    return view('inspiration');
});

Route::get('/partnership', function () {
    return view('partnership');
});

Route::get('/register', function () {
    return view('users.create');
});

Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
