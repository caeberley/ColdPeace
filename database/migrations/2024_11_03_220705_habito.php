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
        Schema::create('habito', function (Blueprint $table) {
            $table->id('id_Habito');
            $table->string('nombreH', 50);
            $table->string('frecuencia', 25);
            $table->string('estadoH', 25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habito');
    }
};
