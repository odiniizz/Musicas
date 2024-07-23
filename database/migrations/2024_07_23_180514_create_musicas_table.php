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
        Schema::create('musicas', function (Blueprint $table) {
            $table->bigIncrements('idMusica');
            $table->string('nomeMusica');
            $table->unsignedBigInteger('idEstilo');
            $table->timestamps();

           /*Chaves estrangeiras*/
            $table->foreign('idEstilo')->references('idEstiloMusical')->on('estilo_musicals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musicas');
    }
};
