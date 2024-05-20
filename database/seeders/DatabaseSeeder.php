<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Dante',
            'last_name' => 'Mishima',
            'email' => 'test@example.com',
        ]);

        // Job::factory(20)->create();
        $this->call(JobSeeder::class);
    }
}
