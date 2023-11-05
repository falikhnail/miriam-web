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
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 50);
            $table->string('nama_lengkap', 150);
            $table->string('jenis_kelamin', 20);
            $table->string('tempat_tanggal_lahir', 100);
            $table->string('agama', 50);
            $table->text('alamat');
            $table->string('pendidikan_terakhir', 20);
            $table->string('pekerjaan', 50);
            $table->string('status_kawin', 50);
            $table->string('no_hp', 50);
            $table->string('no_rm', 100);
            $table->string('nik_suami', 50);
            $table->string('nama_suami', 150);
            $table->string('pekerjaan_suami', 150);
            $table->date('tanggal_periksa');
            $table->string('no_hp_suami', 50);
            $table->string('dokter', 150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien');
    }
};
