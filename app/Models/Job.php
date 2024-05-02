<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;


class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listings';
    protected $fillable = ['title', 'salary'];

    public function employer()
    {

        return $this->belongsTo(Employer::class);
    }

    // public static function all(): array
    // {
    //     return [
    //         [
    //             'id' => 1,
    //             'title' => 'Director',
    //             'salary' => '$50,000'
    //         ],
    //         [
    //             'id' => 2,
    //             'title' => 'Manager',
    //             'salary' => '$30,000'
    //         ],
    //         [
    //             'id' => 3,
    //             'title' => 'Team Lead',
    //             'salary' => '$10,000'
    //         ],
    //     ];
    // }

    // public static function find(int $id): array
    // {
    //     // we use static::all since ewe are in the Job class
    //     $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

    //     if (!$job) {
    //         abort(404);
    //     }

    //     return $job;

    // }
}

