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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('registration_number')->unique();
            $table->foreignId('region_id')->constrained('regions');
            $table->foreignId('district_id')->constrained('districts');
            $table->string('ward')->nullable();
            $table->enum('type', ['Primary School', 'Secondary School', 'Mixed School', 'Special Needs School']);
            $table->enum('category', ['Public', 'Private', 'Faith-Based'])->default('Public');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->enum('status', ['Active', 'Inactive', 'Pending'])->default('Active');
            $table->foreignId('manager_id')->constrained('users');
            $table->integer('student_count')->default(0);
            $table->integer('teacher_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
