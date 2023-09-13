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
        Schema::create('img_lands', function (Blueprint $table) {
            $table->id();
            $table->string('img_name', 100); // nombre del lugar a al que pertenece la imagen
            $table->string('img_land', 100);
            $table->unsignedBigInteger('land_id');
            $table->foreign('land_id')->references('id')->on('lands')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('img_lands');
    }
};
