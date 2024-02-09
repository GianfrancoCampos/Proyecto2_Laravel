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
<<<<<<< HEAD:database/migrations/2024_02_07_173705_create_comments_table.php
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('texto');

=======
        Schema::create('calls', function (Blueprint $table) {
            $table->id();
>>>>>>> gian:database/migrations/2024_02_03_231715_create_calls_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};