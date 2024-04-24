<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

$jobs = [
    [
        'id' => 1,
        'title' => 'Director',
        'salary' => '$50,000'
    ],
    [
        'id' => 2,
        'title' => 'Manager',
        'salary' => '$30,000'
    ],
    [
        'id' => 3,
        'title' => 'Team Lead',
        'salary' => '$10,000'
    ],
];

// declare route that listens for a get request to the home page
// in response , if visited, trigger a funciton that returns a view called welcome
Route::get('/', function () {
    return view('home');
});


// can return string, or array
Route::get('/jobs', function () use ($jobs) {
    return view('jobs', [
        'jobs' => $jobs
    ]);
});


Route::get('/jobs/{id}', function ($id) use ($jobs) {

    // this is a closure, no access to $id

    // \Illuminate\Support\Arr::first($jobs, funcion($job) use ($id){
    //     return $job['id'] == $id
    // })

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    // dd($job);
    return view('job', ['job' => $job]);
});

Route::get('/about', function () {
    return view('about');
});

// Homework
Route::get('/contact', function () {
    return view('contact');
});