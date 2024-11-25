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
        Schema::create('rel_user_grup', function (Blueprint $table) {
            $table->id('id_UG');
            $table->string('username', 12);
            $table->unsignedBigInteger('id_Grupo');
            $table->foreign('username')->references('username')->on('usuario');
            $table->foreign('id_Grupo')->references('id_Grupo')->on('grupo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rel_user_grup');
        
    }
};
