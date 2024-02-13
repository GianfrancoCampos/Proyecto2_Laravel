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
        // Schema::dropIfExists('calls');

        Schema::table('calls', function (Blueprint $table) {
            $table->bigInteger('numero_documento_contacto_id')->unsigned()->after('id');
            $table->foreign('numero_documento_contacto_id')->references('id')->on('contacts')->onUpdate('cascade')->onDelete('cascade');

            $table->bigInteger('operador_id')->unsigned()->after('numero_documento_contacto_id');
            $table->foreign('operador_id')->references('id')->on('operators')->onUpdate('cascade')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('calls', function (Blueprint $table) {
            $table->dropForeign('numero_documento_contacto_id');
            $table->dropColumn('numero_documento_contacto_id');
            $table->dropForeign('operador_id');
            $table->dropColumn('operador_id');
        });
    }
};
