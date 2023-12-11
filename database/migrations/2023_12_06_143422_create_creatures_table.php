<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('creatures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('land_id')->default('0');
            $table->foreign('land_id')->references('id')->on('lands_names')->onDelete('cascade')->nullable();
            $table->longText('creature_name');
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('creatures');
    }
};
