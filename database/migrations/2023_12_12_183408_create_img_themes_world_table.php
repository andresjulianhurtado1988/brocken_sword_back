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
        Schema::create('img_themes_world', function (Blueprint $table) {
            $table->id();
            $table->string('img_name', 100);
            $table->string('img_theme_world', 100);
            $table->string('theme_world_title', 100);
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('img_themes_world');
    }
};
