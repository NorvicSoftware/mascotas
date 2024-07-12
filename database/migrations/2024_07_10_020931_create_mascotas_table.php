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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 30);
            $table->enum('tipo', ['Perro', 'Gato', 'Cabras']);
            $table->integer('edad')->default(0);
            $table->string('raza', 75);
            $table->string('color', 35);
            $table->string('pedigri', 75)->nullable();

            $table->unsignedBigInteger('refugio_id');
            $table->foreign('refugio_id')->references('id')->on('refugios')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
