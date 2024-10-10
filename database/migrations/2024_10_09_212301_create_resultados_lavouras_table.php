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
        Schema::create('resultados_lavouras', function (Blueprint $table) {
            $table->id('id_gsatos_lavouras');
            $table->string('descricao');
            $table->decimal('valor_unitario', 10, 2);
            $table->decimal('quantidade', 8, 2);
            $table->decimal('valor_total', 12, 2);
            $table->string('fornecedor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultados_lavouras');
    }
};
