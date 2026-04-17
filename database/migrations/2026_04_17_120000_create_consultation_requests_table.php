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
        Schema::create('consultation_requests', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('company_name')->nullable();
            $table->string('job_title')->nullable();
            $table->enum('consultation_type', [
                'digital_transformation',
                'cybersecurity',
                'cloud_migration',
                'software_development',
                'data_analytics',
                'infrastructure',
                'other'
            ]);
            $table->enum('company_size', [
                'startup',
                'sme',
                'enterprise',
                'government'
            ]);
            $table->text('project_details');
            $table->date('preferred_date')->nullable();
            $table->enum('preferred_time', [
                'morning',
                'afternoon',
                'evening'
            ])->nullable();
            $table->enum('status', [
                'pending',
                'confirmed',
                'completed',
                'cancelled'
            ])->default('pending');
            $table->text('notes')->nullable();
            $table->string('ip_address')->nullable();
            $table->timestamp('submitted_at')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_requests');
    }
};
