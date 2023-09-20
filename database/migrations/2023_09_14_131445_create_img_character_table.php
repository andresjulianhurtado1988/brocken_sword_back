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
        Schema::create('img_character', function (Blueprint $table) {
            $table->id();
            $table->string('img_name', 100)->nullable(); // nombre del lugar a al que pertenece la imagen
            $table->string('img_character', 100)->nullable();
            $table->unsignedBigInteger('character_id')->nullable();
            $table->foreign('character_id')->references('id')->on('characters')->onDelete('cascade')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('img_character');
    }
};
