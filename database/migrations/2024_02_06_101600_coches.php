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
        Schema::create('coches',function(Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('piloto1');
            $table->string('piloto2');
            $table->string('piloto3');
            $table->bigInteger('numero_coche');
            $table->string('n_escuderia');
            $table->string('imagen_coche');
            $table->timestamps();

            $table->foreign('n_escuderia')->references('nombre')->on('escuderias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coches');
    }
};
