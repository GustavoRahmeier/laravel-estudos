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
        Schema::table('funcionarios', function (Blueprint $table) {
            $table->unsignedBigInteger('id_cargo')->nullable();
            $table->foreign('id_cargo')->references('id')->on('cargos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('funcionarios', function (Blueprint $table) {
            $table->dropForeign(['id_cargo']);
            $table->dropColumn('id_cargo');
        });
    }
};
