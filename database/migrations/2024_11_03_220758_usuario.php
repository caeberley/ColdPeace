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
        Schema::create('usuario', function (Blueprint $table) {
            $table->string('username')->primary();
            $table->string('contraseña');
            $table->string('apeP', 25);
            $table->string('apeM', 25);
            $table->string('nombre', 50);
            $table->string('fechaNam', 25);
            $table->integer('edad');
            $table->string('correo', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
        
    }
};
