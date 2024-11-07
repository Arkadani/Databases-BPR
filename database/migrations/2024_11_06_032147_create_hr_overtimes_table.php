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
        Schema::create('hr_overtimes', function (Blueprint $table) {
            $table->string('ID')->primary();
            $table->integer('employee_id');
            $table->string('overtime_date_start');
            $table->string('overtime_date_end');
            $table->string('overtime_type');
            $table->string('reason');
            $table->string('SPV');
            $table->string('SPV_NOTE');
            $table->string('HR');
            $table->string('HR_NOTE');
            $table->string('HR_LOG');
            $table->timestamps();
            $table->foreign('employee_id')->references('ID')->on('hr_employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr_overtimes');
    }
};
