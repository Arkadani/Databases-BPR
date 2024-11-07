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
        Schema::create('hr_job_specs', function (Blueprint $table) {
            $table->string('ID')->primary();
            $table->integer('EMPLOYEE_ID');
            $table->string('JOB_SPEC');
            $table->timestamps();
            $table->foreign('EMPLOYEE_ID')->references('ID')->on('hr_employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr_job_specs');
    }
};
