<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('title_en'); // English Title
            $table->string('title_ar'); // Arabic Title
            $table->text('description_en')->nullable(); // English Description
            $table->text('description_ar')->nullable(); // Arabic Description
            $table->string('background_image')->nullable(); // Background Image Path
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};
