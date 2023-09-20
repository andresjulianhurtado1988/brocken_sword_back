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
        Schema::create('characters', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('id_land');
            $table->foreign('id_land')->references('id')->on('lands')->onDelete('cascade')->nullable()->default(null);
            $table->unsignedBigInteger('id_race');
            $table->foreign('id_race')->references('id')->on('races')->onDelete('cascade')->nullable()->default(null);
            $table->unsignedBigInteger('id_magic_system');
            $table->foreign('id_magic_system')->references('id')->on('magic_system')->onDelete('cascade')->nullable()->default(null);
            $table->string('character_name', 100)->nullable();
            $table->boolean('magic_user')->nullable();
            $table->integer('age')->nullable();
            $table->longText('description')->nullable();
            $table->longText('story')->nullable();
            $table->boolean('status')->nullable();
            $table->string('first_apparition', 100)->nullable();
            $table->integer('position')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};