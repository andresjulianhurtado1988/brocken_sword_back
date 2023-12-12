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
        Schema::create('mystical_place', function (Blueprint $table) {
            $table->id();
            $table->string('mystical_place_name', 100);
            $table->unsignedBigInteger('land_name_id');
            $table->foreign('land_name_id')->references('id')->on('lands_names')->onDelete('cascade');
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mystical_place');
    }
};
