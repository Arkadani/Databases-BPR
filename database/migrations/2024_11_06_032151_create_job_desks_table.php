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
        Schema::create('job_desks', function (Blueprint $table) {
            $table->string('ID')->primary();
            $table->string('HR_POSITION_ID'); 
            $table->string('JOB_DESK');
            $table->float('TARGET');
            $table->string('STATUS');
            $table->string('DESCR');
            $table->float('DEFAULT_PCT');
            $table->timestamps();
            
            $table->foreign('HR_POSITION_ID')->references('ID')->on('hr_positions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_desks');
    }
};
