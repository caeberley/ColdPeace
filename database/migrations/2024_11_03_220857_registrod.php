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
        Schema::create('registro_d', function (Blueprint $table) {
            $table->id('id_Reg');
            $table->unsignedBigInteger('id_Bit');
            $table->unsignedBigInteger('id_Mision');
            $table->string('estadoM', 25);
            $table->string('fechaR', 25);
            $table->string('experiencia', 250);
            $table->foreign('id_Bit')->references('id_Bit')->on('bitacora');
            $table->foreign('id_Mision')->references('id_Mision')->on('mision');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrod');
        
    }
};
