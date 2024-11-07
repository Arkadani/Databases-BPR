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
        Schema::create('requests', function (Blueprint $table) {
            $table->string('ID')->primary();
            $table->string('REQUESTOR_ID');
            $table->date('REQ_DATE');
            $table->string('REQ_TASK');
            $table->string('REQ_USE');
            $table->string('REQ_FOR');
            $table->string('REQ_DESC');
            $table->string('PIC_ID');
            $table->string('PIC_STATUS');
            $table->string('PIC_DESC');
            $table->integer('RATING');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
