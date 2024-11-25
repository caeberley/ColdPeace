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
        Schema::create('squawk', function (Blueprint $table) {
            $table->id('id_Squa');
            $table->unsignedBigInteger('id_Pub')->nullable();
            $table->string('tituloP', 50);
            $table->string('fechaP', 25);
            $table->string('contenidoP', 250);
            $table->string('imagen', 25)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('squawk');
        
    }
};
