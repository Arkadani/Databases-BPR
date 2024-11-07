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
        Schema::create('hr_trainings', function (Blueprint $table) {
            $table->string('ID')->primary();
            $table->string('MATERI');
            $table->string('JENIS');
            $table->date('START_DATE');
            $table->date('END_DATE');
            $table->string('KETERANGAN');
            $table->string('LEVEL');
            $table->string('SPEAKER');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr_trainings');
    }
};
