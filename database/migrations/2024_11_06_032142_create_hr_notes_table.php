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
        Schema::create('hr_notes', function (Blueprint $table) {
            $table->string('ID')->primary();
            $table->string('NIK');
            $table->string('TANGGAL');
            $table->string('CATATAN');
            $table->timestamps();
            $table->foreign('NIK')->references('NIK')->on('hr_employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr_notes');
    }
};
