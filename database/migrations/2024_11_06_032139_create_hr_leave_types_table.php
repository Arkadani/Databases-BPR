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
        Schema::create('hr_leave_types', function (Blueprint $table) {
            $table->string('ID')->primary();
            $table->string('type');
            $table->string('name');
            $table->string('cut_flag');
            $table->integer('day_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr_leave_types');
    }
};