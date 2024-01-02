<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        /*  Schema::create('schedule_dokter', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('dokter_id')->nullable();
            $table->foreign('dokter_id')->references('id')->on('dokter')->onDelete('cascade');
            $table->date('schedule')->nullable();

            $table->timestamps();
        }); */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        //Schema::dropIfExists('schedule_dokter');
    }
};
