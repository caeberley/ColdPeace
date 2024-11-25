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
        Schema::create('rel_user_lib', function (Blueprint $table) {
            $table->id('id_UL');
            $table->string('username', 12);
            $table->unsignedBigInteger('id_Libro');
            $table->foreign('username')->references('username')->on('usuario');
            $table->foreign('id_Libro')->references('id_Libro')->on('libro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rel_user_lib');
        
    }
};
