<?php

use Illuminate\Support\Facades\Route;

// declare route that listens for a get request to the home page
// in response , if visited, trigger a funciton that returns a view called welcome
Route::get('/', function () {
    return view('home');
});


// can return string, or array
Route::get('/about', function () {
    return view('about');
});

// Homework
Route::get('/contact', function(){
    return view('contact');
});