<?php

use Illuminate\Support\Facades\Route;

// declare route that listens for a get request to the home page
// in response , if visited, trigger a funciton that returns a view called welcome
Route::get('/', function () {
    return view('home', [
       'jobs' => [
            [
                'title' => 'Director', 
                'salary' => '$50,000'
            ],
            [
                'title' => 'Manager', 
                'salary' => '$30,000'
            ],
            [
                'title' => 'Team Lead', 
                'salary' => '$10,000'
            ],
       ]
    ]);
});


// can return string, or array
Route::get('/jobs', function () {
    return view('jobs');
});
Route::get('/about', function () {
    return view('about');
});

// Homework
Route::get('/contact', function(){
    return view('contact');
});