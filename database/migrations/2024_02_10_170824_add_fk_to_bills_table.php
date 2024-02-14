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
        Schema::table('bills', function (Blueprint $table) {
            //
            $table->bigInteger('numero_compra')->unsigned()->after('id');
            $table->foreign('numero_compra')->references('id')->on('buys')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bills', function (Blueprint $table) {
            //
            $table->dropForeign('numero_compra');
            $table->dropColumn('numero_compra');
        });
    }
};
