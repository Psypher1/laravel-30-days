<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(5);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);

        Mail::to($job->employer->user)->send(
            new JobPosted($job)
        );

        return redirect('/jobs');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function edit(Job $job)
    {
        // if (Auth::user()->cannot('edit-job', $job)) {
        //     dd('can edit job');
        // }


        // with middlewaare added
        // Gate::authorize('edit-job', $job);


        // Gate::define('edit-job', function (User $user, Job $job) {
        //     return $job->employer->user->is($user);
        // });

        // if (Auth::guest()) {
        //     return redirect('login');
        // }




        //Replaced by gate
        // if ($job->employer->user->isNot(Auth::user())) {
        //     abort(403);
        // }

        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        // authorise (on hold...)

        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);


        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        // redirect to updated job
        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {

        $job->delete();

        return redirect('/jobs');
    }


}
