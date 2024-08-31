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
        Schema::create('gado', function (Blueprint $table) {
            $table->id('id_gado');
            $table->string('brinco');
            $table->string('gado_nome');
            $table->string('data_nascimento');
            $table->string('sexo');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gado');
    }
};
