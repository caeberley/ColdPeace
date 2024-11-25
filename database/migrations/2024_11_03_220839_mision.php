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
        Schema::create('mision', function (Blueprint $table) {
            $table->id('id_Mision');
            $table->unsignedBigInteger('id_Plan');
            $table->string('nombreM', 100);
            $table->string('descM', 500);
            $table->foreign('id_Plan')->references('id_Plan')->on('plan_mision');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mision');
        
    }
};
