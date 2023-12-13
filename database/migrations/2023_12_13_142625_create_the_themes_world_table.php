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
        Schema::create('the_themes_world', function (Blueprint $table) {
            $table->id();
            $table->longText('allDescription');
            $table->string('title', 100);
            $table->unsignedBigInteger('id_img_theme_world');
            $table->foreign('id_img_theme_world')->references('id')->on('img_themes_world')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('the_themes_world');
    }
};
