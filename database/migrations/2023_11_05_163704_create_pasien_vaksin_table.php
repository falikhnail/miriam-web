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
        Schema::create('pasien_vaksin', function (Blueprint $table) {
            $table->id();
            $table->string('nik_anak', 100);
            $table->string('nama_lengkap', 150);
            $table->string('tempat_tanggal_lahir', 100);
            $table->string('nama_orang_tua', 150);
            $table->string('no_hp', 50);
            $table->text('alamat');
            $table->string('vaksin', 100);
            $table->string('scedule_vaksin', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien_vaksin');
    }
};
