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
            $table->string('brinco')->nullable()->change();
            $table->string('gado_nome')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gado', function (Blueprint $table) {
            $table->string('brinco')->nullable(false)->change();
            $table->string('gado_nome')->nullable(false)->change();
        });
    }
};
