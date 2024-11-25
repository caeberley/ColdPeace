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
        Schema::create('pinguidmin', function (Blueprint $table) {
            $table->id('id_admin');
            $table->string('username', 12);
            $table->unsignedBigInteger('id_Esp');
            $table->foreign('username')->references('username')->on('usuario');
            $table->foreign('id_Esp')->references('id_Esp')->on('especialidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinguidmin');
        
    }
};
