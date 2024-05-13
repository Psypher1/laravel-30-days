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


// Index can return string, or array
Route::get('/jobs', function () {

    // $jobs = Job::with('employer')->paginate(4);
    $jobs = Job::with('employer')->latest()->simplePaginate(5);
    // $jobs = Job::with('employer')->cursorPaginate(4);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

// Create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Store
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

// Show
Route::get('/jobs/{id}', function ($id) {

    // this is a closure, no access to $id so use is enlisted
    // \Illuminate\Support\Arr::first($jobs, funcion($job) use ($id){
    //     return $job['id'] == $id
    // })

    // $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);
    $job = Job::find($id);

    // dd($job);
    return view('jobs.show', ['job' => $job]);
});


// Edit
Route::get('/jobs/{id}/edit', function ($id) {

    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});


// Update
Route::patch('/jobs/{id}', function ($id) {

    // validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    // authorise (on hold...)

    // update job
    $job = Job::findOrFail($id);



    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    // redirect to updated job
    return redirect('/jobs/' . $job->id);
});

// Destroy
Route::delete('/jobs/{id}', function ($id) {
    // authorise (on hold...)
    // delete job
    $job = Job::findOrFail($id);
    $job->delete();

    // Job::findOrFail($id)->delete();

    // redirect
    return redirect('/jobs');
});




Route::get('/about', function () {
    return view('about');
});

// Homework
Route::get('/contact', function () {
    return view('contact');
});