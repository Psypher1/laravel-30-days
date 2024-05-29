<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobPolicy
{
    /**
     * Check if the given user is authorized to edit the job.
     *
     * @param User $user The user to check authorization for.
     * @param Job $job The job to check authorization for.
     * @return bool Returns true if the user is authorized to edit the job, false otherwise.
     */
    public function edit(User $user, Job $job): bool
    {
        return $job->employer->user->is($user);
    }
}
