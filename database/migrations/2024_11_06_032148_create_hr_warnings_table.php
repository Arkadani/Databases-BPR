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
        Schema::create('hr_warnings', function (Blueprint $table) {
            $table->string('ID')->primary();
            $table->date('warning_date');
            $table->integer('employee_id');
            $table->string('rules_id');
            $table->string('warning_type');
            $table->string('punishment');
            $table->string('descr');
            $table->string('supervisor_flag');
            $table->date('supervisor_date');
            $table->string('hr_flag');
            $table->string('hr_date');
            $table->timestamps();
            $table->foreign('employee_id')->references('ID')->on('hr_employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr_warnings');
    }
};
