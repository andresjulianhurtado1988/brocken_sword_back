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


        Schema::create('lands', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('land_type_id');
            $table->foreign('land_type_id')->references('id')->on('land_type')->onDelete('cascade');
            $table->string('land_name', 100);
            $table->string('image', 100);
            $table->longText('story');
            $table->longText('descripcion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
 
        Schema::dropIfExists('lands');
    }
};