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
        // Schema::dropIfExists('juniors');
        Schema::table('juniors', function (Blueprint $table) {
            $table->bigInteger('operator_id')->unsigned()->after('id');
            $table->foreign('operator_id')->references('id')->on('operators')->onUpdate('cascade')->onDelete('cascade');
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('juniors', function (Blueprint $table) {
            
            $table->dropForeign('operator_id');
            $table->dropColumn('operator_id');
        });
    }
};
