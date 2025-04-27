<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
   return view('about');
});

Route::get('/inspiration', function () {
    return view('about');
});

Route::get('/partnership', function () {
    return view('about');
});

Route::get('/register', function () {
    return view('about');
});
