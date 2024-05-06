<?php

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('job_tag', function (Blueprint $table) {
            $table->id();
            // we do this to make sure we access our listing tale
            $table->foreignIdFor(Job::class, 'job_listing_id')->constrained()->cascadeOnDelete();
            // if the ref record is deleted, cascade and delete this too
            $table->foreignIdFor(Tag::class)->constrained()->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
        // add this to refresh properly
        Schema::dropIfExists('job_tag');
    }
};
