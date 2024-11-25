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
        Schema::create('rel_user_tar', function (Blueprint $table) {
            $table->id('id_UT');
            $table->string('username', 12);
            $table->unsignedBigInteger('id_Tarea');
            $table->foreign('username')->references('username')->on('usuario');
            $table->foreign('id_Tarea')->references('id_Tarea')->on('tarea');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rel_user_tar');
        
    }
};
