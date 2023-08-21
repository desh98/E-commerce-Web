<?php

use Illuminate\Support\Facades\Route;

// Default home page
Route::get('/', function () {
    return view('index'); 
});

// About page
Route::get('/about', function () {
    return view('about'); 
});

// Product page
Route::get('/product', function () {
    return view('product'); 
});

// Contact us page
Route::get('/contact-us', function () {
    return view('contact'); 
});

// Login page
Route::get('/login', function () {
    return view('login'); 
});




