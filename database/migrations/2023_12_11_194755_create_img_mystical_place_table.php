<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('img_mystical_place', function (Blueprint $table) {
            $table->id();
            $table->string('img_name', 100); // nombre del lugar a al que pertenece la imagen
            $table->string('img_mystical_place', 100);
            $table->unsignedBigInteger('mystical_place_id');
            $table->foreign('mystical_place_id')->references('id')->on('mystical_place')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('img_mystical_place');
    }
};
