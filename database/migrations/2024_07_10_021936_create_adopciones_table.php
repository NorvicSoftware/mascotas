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
        Schema::create('adopciones', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');

            $table->unsignedBigInteger('mascota_id');
            $table->foreign('mascota_id')->references('id')->on('mascotas')->onDelete('cascade');

            $table->unsignedBigInteger('persona_id');
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adopciones');
    }
};
