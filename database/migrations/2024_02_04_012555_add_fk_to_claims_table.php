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
        // Schema::dropIfExists('claims');
        Schema::table('claims', function (Blueprint $table) {

            $table->bigInteger('operador_id')->unsigned()->after('id');
            $table->foreign('operador_id')->references('id')->on('operators')->onUpdate('cascade')->onDelete('cascade');

            $table->bigInteger('cod_estado_id')->unsigned()->after('operador_id');
            $table->foreign('cod_estado_id')->references('id')->on('states')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('claims', function (Blueprint $table) {
            $table->dropForeign('operador_id');
            $table->dropColumn('operador_id');
            $table->dropForeign('cod_estado_id');
            $table->dropColumn('cod_estado_id');
        });
    }
};
