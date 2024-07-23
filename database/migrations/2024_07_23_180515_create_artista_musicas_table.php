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
        Schema::create('artista_musicas', function (Blueprint $table) {
            $table->bigIncrements("idArtistaMusica");
            $table->unsignedBigInteger("idArtista");
            $table->unsignedBigInteger("idMusica");
            $table->timestamps();

            /*Chaves estrangeiras*/
            $table->foreign('idArtista')->references('idArtista')->on('artistas');
            $table->foreign('idMusica')->references('idMusica')->on('musicas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artista_musicas');
    }
};
