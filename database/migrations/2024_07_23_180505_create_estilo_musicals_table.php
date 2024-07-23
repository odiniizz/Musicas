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
        Schema::create('estilo_musicals', function (Blueprint $table) {
            $table->bigIncrements("idEstiloMusical");
            $table->string("nomeEstiloMusical");
            $table->string("paisReferencia");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estilo_musicals');
    }
};
