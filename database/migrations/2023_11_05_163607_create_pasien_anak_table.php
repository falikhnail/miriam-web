<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /* public function up(): void
    {
        Schema::create('pasien_anak', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 100);
            $table->string('nama_lengkap', 150);
            $table->string('jenis_kelamin', 20);
            $table->string('tempat_tanggal_lahir', 100);
            $table->string('nama_orang_tua', 150);
            $table->string('no_hp', 50);
            $table->text('alamat');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('pasien');
    } */
};
