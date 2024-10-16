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
        // Atualizando a linha na tabela 'home'
        DB::table('home')
            ->where('id_home', 7)
            ->update([
                'nome' => 'Resultados Lavouras',
                'nome_tela' => 'resultados_lavouras'
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Revertendo a alteração, se necessário
        DB::table('home')
            ->where('id_home', 7)
            ->update([
                'nome' => 'Produtos',
                'nome_tela' => 'produtos'
            ]);
    }
};
