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
        // Inserir o registro na tabela 'perfil_permissao'
        DB::table('perfil_permissao')->insert([
            'id_home' => 6,
            'id_perfil' => 3
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remover o registro inserido na migração
        DB::table('perfil_permissao')
            ->where('id_home', 6)
            ->where('id_perfil', 3)
            ->delete();
    }
};
