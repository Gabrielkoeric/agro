<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home', function (Blueprint $table) {
            $table->id('id_home');
            $table->string('nome');
            $table->string('nome_tela');
            $table->string('imagem_tela');
            $table->boolean('permite_home');
            $table->timestamps();
        });

        $dadosPadraoHome = [
            [
                'id_home' => 1,
                'nome' => 'Gado',
                'nome_tela' => 'gado',
                'imagem_tela' => 'storage/home/servidor.png',
                'permite_home' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_home' => 2,
                'nome' => 'Conferencia Gado',
                'nome_tela' => 'conferencia_gado',
                'imagem_tela' => 'storage/home/cpu.png',
                'permite_home' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_home' => 3,
                'nome' => 'Manejos Gado',
                'nome_tela' => 'manejo_gado',
                'imagem_tela' => 'storage/home/ip_publico.png',
                'permite_home' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_home' => 4,
                'nome' => 'Areas',
                'nome_tela' => 'areas',
                'imagem_tela' => 'storage/home/memoria.png',
                'permite_home' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_home' => 5,
                'nome' => 'Safra',
                'nome_tela' => 'safra',
                'imagem_tela' => 'storage/home/hd.png',
                'permite_home' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_home' => 6,
                'nome' => 'Manejos Lavoura',
                'nome_tela' => 'manejo_lavoura',
                'imagem_tela' => 'storage/home/ip_publico.png',
                'permite_home' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_home' => 7,
                'nome' => 'Produtos',
                'nome_tela' => 'produtos',
                'imagem_tela' => 'storage/home/ip.png',
                'permite_home' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_home' => 8,
                'nome' => 'Sobras de Produtos',
                'nome_tela' => 'sobra_produtos',
                'imagem_tela' => 'n/t',
                'permite_home' => 0,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_home' => 9,
                'nome' => 'Tempo de Trabalho Lavoura',
                'nome_tela' => 'tempo_lavoura',
                'imagem_tela' => 'storage/home/terraform.png',
                'permite_home' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_home' => 10,
                'nome' => 'Apiarios',
                'nome_tela' => 'apiarios',
                'imagem_tela' => 'storage/home/terraform.png',
                'permite_home' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_home' => 11,
                'nome' => 'Caixas',
                'nome_tela' => 'caixas',
                'imagem_tela' => 'storage/home/terraform.png',
                'permite_home' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_home' => 12,
                'nome' => 'Mel',
                'nome_tela' => 'mel',
                'imagem_tela' => 'storage/home/terraform.png',
                'permite_home' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_home' => 13,
                'nome' => 'Tempo de Trabalho Mel',
                'nome_tela' => 'tempo_mel',
                'imagem_tela' => 'storage/home/terraform.png',
                'permite_home' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_home' => 14,
                'nome' => 'Manejos Mel',
                'nome_tela' => 'manejo_mel',
                'imagem_tela' => 'storage/home/ip_publico.png',
                'permite_home' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_home' => 15,
                'nome' => 'Trator',
                'nome_tela' => 'trator',
                'imagem_tela' => 'storage/home/ip_publico.png',
                'permite_home' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_home' => 16,
                'nome' => 'Implemento',
                'nome_tela' => 'implemento',
                'imagem_tela' => 'storage/home/ip_publico.png',
                'permite_home' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_home' => 98,
                'nome' => 'Usuarios',
                'nome_tela' => 'usuario',
                'imagem_tela' => 'storage/home/usuarios.png',
                'permite_home' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_home' => 99,
                'nome' => 'Perfis de Usuarios',
                'nome_tela' => 'perfis_usuarios',
                'imagem_tela' => 'storage/home/perfis_usuarios.png',
                'permite_home' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id_home' => 100,
                'nome' => 'Logs de Acesso',
                'nome_tela' => 'access_logs',
                'imagem_tela' => 'storage/home/log_access.png',
                'permite_home' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
        ];

        DB::table('home')->insert($dadosPadraoHome);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home');
    }
};
