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
        Schema::create('hr_rollings', function (Blueprint $table) {
            $table->string('ID')->primary();
            $table->string('NIK');
            $table->date('TANGGAL');
            $table->string('BAGIAN');
            $table->string('KANTOR');
            $table->string('STATUS');
            $table->string('GRADE');
            $table->date('TGL_SK');
            $table->string('NO_SK');
            $table->string('SPV');
            $table->timestamps();
            $table->foreign('NIK')->references('NIK')->on('hr_employees')->onDelete('cascade');
            $table->foreign('BAGIAN')->references('ID')->on('hr_positions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr_rollings');
    }
};
