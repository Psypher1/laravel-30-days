<?php

namespace App\Models;

class Job
{
    public static function all(): array
    {
        return [
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
    }
}

