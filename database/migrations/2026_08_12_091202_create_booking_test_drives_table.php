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
        Schema::create('booking_test_drives', function (Blueprint $table) {

            $table->id();

            $table->string('nama');

            $table->string('hp');

            $table->string('kendaraan');

            $table->date('tanggal');

            $table->time('waktu');

            $table->enum('status',[
                'pending',
                'proses',
                'selesai'
            ])->default('pending');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_test_drives');
    }
};
