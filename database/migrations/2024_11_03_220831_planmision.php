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
        Schema::create('plan_mision', function (Blueprint $table) {
            $table->id('id_Plan');
            $table->unsignedBigInteger('id_Tip');
            $table->unsignedBigInteger('id_admin');
            $table->string('nombreP', 50);
            $table->string('descP', 250);
            $table->foreign('id_Tip')->references('id_Tip')->on('tipo');
            $table->foreign('id_admin')->references('id_admin')->on('pinguidmin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_mision');
        
    }
};
