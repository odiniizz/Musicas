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
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('idAluno');
            $table->string('nomeAluno');
            $table->string('turmaAluno');
            $table->unsignedBigInteger('idMusicaPreferida');
            $table->unsignedBigInteger('idArtistaPreferido');
            $table->unsignedBigInteger('idEstiloPreferido');
            $table->timestamps();

            /*Chaves estrangeiras*/
            $table->foreign('idMusicaPreferida')->references('idMusica')->on('musicas');
            $table->foreign('idArtistaPreferido')->references('idArtista')->on('artistas');
            $table->foreign('idEstiloPreferido')->references('idEstiloMusical')->on('estilo_musicals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
