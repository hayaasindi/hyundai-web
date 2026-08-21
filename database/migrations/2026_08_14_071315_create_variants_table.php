<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('kendaraan_variants', function (Blueprint $table) {

            $table->id();

            $table->foreignId('kendaraan_id')
            ->constrained()
            ->cascadeOnDelete();


            $table->string('nama');

            $table->string('harga');

            $table->string('whatsapp')
            ->nullable();


            $table->timestamps();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('kendaraan_variants');
    }

};