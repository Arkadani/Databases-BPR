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
        Schema::create('hr_employees', function (Blueprint $table) {
            $table->integer('ID')->primary();
            $table->string('NIK')->index();
            $table->text('NAMA');
            $table->integer('AO_CODE');
            $table->string('BLOOD_TYPE');
            $table->string('GENDER');
            $table->string('PENDIDIKAN');
            $table->string('UNIVERSITAS');
            $table->string('JURUSAN');
            $table->string('IPK');
            $table->string('IBU_KANDUNG');
            $table->string('STATUS_KARYAWAN');
            $table->string('NAMA_PASANGAN');
            $table->string('TANGGUNAN');
            $table->string('NO_KTP');
            $table->string('NAMA_KTP');
            $table->string('ALAMAT_KTP');
            $table->string('SECTOR_KTP');
            $table->string('DISTRICT_KTP');
            $table->string('SUB_DISTRICT_KTP');
            $table->string('ALAMAT_TINGGAL');
            $table->string('SECTOR_TINGGAL');
            $table->string('DISTRICT_TINGGAL');
            $table->string('SUB_DISTRICT_TINGGAL');
            $table->date('TGL_LAHIR');
            $table->string('TEMPAT_LAHIR');
            $table->string('AGAMA');
            $table->string('TELP');
            $table->string('HP');
            $table->string('NO_REK_CF');
            $table->string('NO_REK_TF');
            $table->string('EMAIL');
            $table->string('NPWP');
            $table->string('SUMBER_LOKER');
            $table->string('KET_LOKER');
            $table->string('INTERVIEW');
            $table->string('TGL_KELUAR');
            $table->string('ALASAN_KELUAR');
            $table->string('CUTI');
            $table->string('PHOTO_LOC');
            $table->string('SPV');
            $table->string('STATUS_MST');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr_employees');
    }
};
