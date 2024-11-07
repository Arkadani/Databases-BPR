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
        Schema::create('hr_activities', function (Blueprint $table) {
            $table->string('ID')->primary();
            $table->integer('EMPLOYEE_ID');
            $table->string('JOB_ID')->nullable();
            $table->string('VAL_DATE');
            $table->dateTime('INPUT_DATE');
            $table->decimal('VAL');
            $table->string('DESCR');
            $table->string('APPROVAL_FLAG');
            $table->dateTime('APPROVAL_TIME');
            $table->timestamps();
            $table->foreign('EMPLOYEE_ID')->references('ID')->on('hr_employees')->onDelete('cascade');
            $table->foreign('JOB_ID')->references('ID')->on('job_desks')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr_activities');
    }
};
