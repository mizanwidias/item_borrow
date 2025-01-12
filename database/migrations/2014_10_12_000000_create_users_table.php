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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50); // Column for name
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->enum('role', ['admin', 'teacher', 'student']);
            $table->string('employee_id', 20)->nullable(); // Employee ID for teachers
            $table->string('student_id', 20)->nullable(); // Student ID for students
            $table->string('class', 50)->nullable(); // Class for students
            $table->string('profile_photo', 255)->nullable(); // Profile photo
            $table->timestamps(); // Manages created_at and updated_at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
