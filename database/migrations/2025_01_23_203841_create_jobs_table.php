<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->integer('seniority');
            $table->integer('industry');
            $table->integer('job_type');
            $table->string('experience');
            $table->string('gender');
            $table->string('salary_from');
            $table->string('salary_to');
            $table->string('currency');
            $table->string('location');
            $table->integer('country');
            $table->integer('city');
            $table->string('job_description');
            $table->string('candidate_profile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
