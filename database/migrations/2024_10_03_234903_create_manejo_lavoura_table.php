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
        Schema::create('manejo_lavoura', function (Blueprint $table) {
            $table->id('id_manejo_lavoura');
            $table->timestamp('data_hora_ini');
            $table->timestamp('data_hora_fim')->nullable();
            $table->float('horas_totais')->nullable();
            $table->string('descricao')->nullable();
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('usuarios');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manejo_lavoura');
    }
};
