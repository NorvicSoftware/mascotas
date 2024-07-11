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
        Schema::create('refugios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 75);
            $table->string('ciudad', 35);
            $table->string('direccion', 250)->nullable();
            $table->string('telefono', 15)->nullable();
            $table->string('encargado', 75);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refugios');
    }
};
