<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();

            // * identifier to determine schedule was create at same time
            //$table->string('sid', 150);

            $table->unsignedBigInteger('dokter_id')->nullable();
            $table->foreign('dokter_id')->references('id')->on('dokter')->onDelete('cascade');
            $table->date('tanggal');
            $table->integer('kuota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {

        Schema::dropIfExists('schedule');
    }
};
