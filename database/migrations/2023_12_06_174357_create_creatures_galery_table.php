<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('creatures_galery', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('creature_id')->default('0');
            $table->foreign('creature_id')->references('id')->on('creatures')->onDelete('cascade')->nullable();
            $table->string('img_name', 100)->nullable(); // nombre del lugar a al que pertenece la imagen
            $table->string('img_creature', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('creatures_galery');
    }
};
