<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Mail\JobPosted;
use App\Models\Teacher;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;

// Route::get('test', function () {
//     // return new JobPosted();
//     Mail::to("jamesmidzi@gmail.com")->send(new JobPosted());

//     return "Done";
// });

// declare route that listens for a get request to the home page
// in response , if visited, trigger a funciton that returns a view called homw
Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

// // Resource approaach
// Route::resource('jobs', JobController::class)->midddleware('auth');
// Route::resource('jobs', JobController::class)->only(['index', 'show']);
// Route::resource('jobs', JobController::class)->except(['index', 'show'])->middleware('auth');

// Index can return string, or array
Route::get('/jobs', [JobController::class, 'index']);

// Create
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');

// Store
Route::post('/jobs', [JobController::class, 'store']);

// Show
Route::get('/jobs/{job}', [JobController::class, 'show']);

// Edit
// Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->middleware(['auth', 'can:edit-job,job']);
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'job');

// Update
Route::patch('/jobs/{job}', [JobController::class, 'update'])
    ->middleware('auth')
    ->can('edit', 'job'); // update to method name in policy

// Destroy
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])
    ->middleware('auth')
    ->can('edit', 'job');






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

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
