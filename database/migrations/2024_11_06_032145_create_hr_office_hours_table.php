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
        Schema::create('hr_office_hours', function (Blueprint $table) {
            $table->string('ID')->primary();
            $table->integer('employee_id');
            $table->string('jam_masuk');
            $table->string('jam_pulang');
            $table->string('limit_jam_masuk');
            $table->string('limit_jam_pulang');
            $table->string('jam_istirahat_mulai');
            $table->string('jam_istirahat_pulang');
            $table->string('break_flag');
            $table->string('entry_flag');
            $table->string('exit_flag');
            $table->timestamps();
            $table->foreign('employee_id')->references('ID')->on('hr_employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr_office_hours');
    }
};
