<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('pasien_umum', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 50)->nullable();
            $table->string('nama_lengkap', 150);
            $table->string('jenis_kelamin', 20)->nullable();
            $table->string('tempat_tanggal_lahir', 100);
            $table->string('agama', 50)->nullable();
            $table->text('alamat');
            $table->string('pendidikan_terakhir', 20)->nullable();
            $table->string('pekerjaan', 50)->nullable();
            $table->string('status_kawin', 50)->nullable();
            $table->string('no_hp', 50);
            $table->string('no_rm', 100)->nullable();
            $table->string('nik_suami', 50)->nullable();
            $table->string('nama_suami', 150)->nullable();
            $table->string('pekerjaan_suami', 150)->nullable();
            $table->string('no_hp_suami', 50)->nullable();
            $table->string('dokter', 150)->nullable();

            /* $table->unsignedBigInteger('schedule_id')->nullable();
            $table->foreign('schedule_id')->references('id')->on('schedule')->onDelete('cascade'); */
            $table->date('schedule')->nullable();

            $table->unsignedBigInteger('dokter_id')->nullable();
            $table->foreign('dokter_id')->references('id')->on('dokter')->onDelete('cascade');

            $table->string('cara_bayar', 100)->nullable();
            $table->string('status', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('pasien_umum');
    }
};
