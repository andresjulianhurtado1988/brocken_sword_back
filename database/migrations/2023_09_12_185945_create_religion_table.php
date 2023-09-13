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
        Schema::create('religion', function (Blueprint $table) {
            $table->id();
            $table->string('deity', 100);
            $table->string('deity_img', 100);
            $table->longText('story');
            $table->longText('description');
            $table->unsignedBigInteger('order_pattern_id');
            $table->foreign('order_pattern_id')->references('id')->on('orders')->onDelete('cascade');
            $table->unsignedBigInteger('main_altar_land_id');
            $table->foreign('main_altar_land_id')->references('id')->on('lands')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('religion');
    }
};