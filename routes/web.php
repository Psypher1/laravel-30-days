<?php

use App\Models\Teacher;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;

// class Job
// {
//     public static function all(): array
//     {
//         return [
//             [
//                 'id' => 1,
//                 'title' => 'Director',
//                 'salary' => '$50,000'
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'Manager',
//                 'salary' => '$30,000'
//             ],
//             [
//                 'id' => 3,
//                 'title' => 'Team Lead',
//                 'salary' => '$10,000'
//             ],
//         ];
//     }
// }

// $jobs = [
//     [
//         'id' => 1,
//         'title' => 'Director',
//         'salary' => '$50,000'
//     ],
//     [
//         'id' => 2,
//         'title' => 'Manager',
//         'salary' => '$30,000'
//     ],
//     [
//         'id' => 3,
//         'title' => 'Team Lead',
//         'salary' => '$10,000'
//     ],
// ];

// declare route that listens for a get request to the home page
// in response , if visited, trigger a funciton that returns a view called welcome
Route::get('/', function () {
    // $teachers = Teacher::all();
    // dd($teachers);
    return view('home');
});


// can return string, or array
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});



Route::get('/jobs/{id}', function ($id) {

    // this is a closure, no access to $id

    // \Illuminate\Support\Arr::first($jobs, funcion($job) use ($id){
    //     return $job['id'] == $id
    // })

    // $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);
    $job = Job::find($id);

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