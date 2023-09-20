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
        Schema::create('characters_names', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('gender', 1)->nullable();
            $table->boolean('used');
            $table->boolean('created_by_migration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters_names');
    }
};