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
        Schema::create('hr_main_jobs', function (Blueprint $table) {
            $table->string('ID')->primary();
            $table->integer('employee_id');
            $table->string('job_desk')->nullable();
            $table->timestamps();
            $table->foreign('employee_id')->references('ID')->on('hr_employees')->onDelete('cascade');
            $table->foreign('job_desk')->references('ID')->on('job_desks')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr_main_jobs');
    }
};
