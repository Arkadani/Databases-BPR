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
        Schema::create('hr_leaves', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->integer('employee_id');
            $table->date('leave_date_start');
            $table->date('leave_data_end');
            $table->string('leave_type')->nullable();
            $table->string('attachment');
            $table->string('reason');
            $table->string('substitute');
            $table->string('SPV');
            $table->string('SPV_NOTE');
            $table->string('SPV_LOG');
            $table->string('HR');
            $table->string('HR_NOTE');
            $table->string('HR_LOG');
            $table->timestamps();
            $table->foreign('employee_id')->references('ID')->on('hr_employees')->onDelete('cascade');
            $table->foreign('leave_type')->references('ID')->on('hr_leave_types')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr_leaves');
    }
};
