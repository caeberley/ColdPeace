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
        Schema::create('rel_user_vid', function (Blueprint $table) {
            $table->id('id_UV');
            $table->string('username', 12);
            $table->unsignedBigInteger('id_Video');
            $table->foreign('username')->references('username')->on('usuario');
            $table->foreign('id_Video')->references('id_Video')->on('video');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rel_user_vid');
        
    }
};
