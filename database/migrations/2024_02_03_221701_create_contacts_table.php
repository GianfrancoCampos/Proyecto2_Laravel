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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('numero_documento')->unique();
            $table->string('tipo_documento')->unique();
=======

            $table->string('numero_documento')->unique();
            $table->string('tipo_documento');
>>>>>>> 268b1dad81f50d3558cc35a113c6e7d642df02eb
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('calle');
            $table->integer('numero_domicilio');
            $table->integer('cod_postal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
