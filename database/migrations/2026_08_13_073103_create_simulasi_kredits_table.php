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
        Schema::create('simulasi_kredits', function(Blueprint $table){

            $table->id();

            $table->string('nama_mobil');

            $table->integer('harga');

            $table->integer('dp');

            $table->integer('tenor');

            $table->integer('cicilan');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('simulasi_kredits');
    }
};
