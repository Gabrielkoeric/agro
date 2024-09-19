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
        Schema::table('gado', function (Blueprint $table) {
            // Adiciona a coluna 'mae' como nullable e do tipo string
            $table->string('mae')->nullable()->after('sexo'); // ou 'after' de outra coluna existente
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gado', function (Blueprint $table) {
            // Remove a coluna 'mae' no rollback
            $table->dropColumn('mae');
        });
    }
};
