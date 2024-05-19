<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;


// declare route that listens for a get request to the home page
// in response , if visited, trigger a funciton that returns a view called welcome
// Route::get('/', function () {
//     // $teachers = Teacher::all();
//     // dd($teachers);
//     return view('home');
// });
Route::view('/', 'home');

// Index can return string, or array
Route::get('/jobs', [JobController::class, 'index']);
// Route::get('/jobs', function () {

//     // $jobs = Job::with('employer')->paginate(4);
//     $jobs = Job::with('employer')->latest()->simplePaginate(5);
//     // $jobs = Job::with('employer')->cursorPaginate(4);

//     return view('jobs.index', [
//         'jobs' => $jobs
//     ]);
// });

// Create
Route::get('/jobs/create', [JobController::class, 'create']);
// Route::get('/jobs/create', function () {
//     return view('jobs.create');
// });

// Store
Route::post('/jobs', [JobController::class, 'store']);
// Route::post('/jobs', function () {
//     request()->validate([
//         'title' => ['required', 'min:3'],
//         'salary' => ['required'],
//     ]);

//     Job::create([
//         'title' => request('title'),
//         'salary' => request('salary'),
//         'employer_id' => 1
//     ]);

//     return redirect('/jobs');
// });

// Show
Route::get('/jobs/{job}', [JobController::class, 'show']);
// Route::get('/jobs/{job}', function (Job $job) {
//     return view('jobs.show', ['job' => $job]);
// });
// Route::get('/jobs/{id}', function ($id) {

//     // this is a closure, no access to $id so use is enlisted
//     // \Illuminate\Support\Arr::first($jobs, funcion($job) use ($id){
//     //     return $job['id'] == $id
//     // })

//     // $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);
//     $job = Job::find($id);

//     // dd($job);
//     return view('jobs.show', ['job' => $job]);
// });


// Edit
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);
// Route::get('/jobs/{job}/edit', function (Job $job) {

//     // $job = Job::find($id);

//     return view('jobs.edit', ['job' => $job]);
// });


// Update
Route::patch('/jobs/{job}', [JobController::class, 'update']);
// Route::patch('/jobs/{job}', function (Job $job) {

//     // validate
//     request()->validate([
//         'title' => ['required', 'min:3'],
//         'salary' => ['required'],
//     ]);

//     // authorise (on hold...)

//     // update job
//     // $job = Job::findOrFail($id);



//     $job->update([
//         'title' => request('title'),
//         'salary' => request('salary'),
//     ]);

//     // redirect to updated job
//     return redirect('/jobs/' . $job->id);
// });

// Destroy
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);
// Route::delete('/jobs/{job}', function (Job $job) {
//     // authorise (on hold...)
//     // delete job
//     // $job = Job::findOrFail($id);
//     $job->delete();

//     // Job::findOrFail($id)->delete();

//     // redirect
//     return redirect('/jobs');
// });




Route::get('/about', function () {
    return view('about');
});

// Homework
Route::get('/contact', function () {
    return view('contact');
});


// GROUP
// Route::controller(JobController::class)->group(function () {
//     Route::get('/', 'index');
// });

// // RESOURCE
// Route::resource('jobs', JobController::class, [
//     'only' => ['index', 'show', 'create']
// ]);


//  AUTHENTICATION
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
