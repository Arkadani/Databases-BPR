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
        Schema::create('hr_positions', function (Blueprint $table) {
            $table->string('ID')->primary();
            $table->string('MASTER_NAME');
            $table->string('UPPER_LEVEL');
            $table->string('DESCRIPTION');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr_positions');
    }
};