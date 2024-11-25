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
        Schema::create('pinguinologo', function (Blueprint $table) {
            $table->id('id_Olo');
            $table->string('username', 12);
            $table->string('cedula', 50);
            $table->foreign('username')->references('username')->on('usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinguinologo');
        
    }
};
