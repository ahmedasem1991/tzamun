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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('vision_en'); // Vision in English
            $table->string('vision_ar'); // Vision in Arabic
            $table->text('vision_description_en')->nullable(); // Vision Description in English
            $table->text('vision_description_ar')->nullable(); // Vision Description in Arabic
            $table->string('mission_en'); // Mission in English
            $table->string('mission_ar'); // Mission in Arabic
            $table->text('mission_description_en')->nullable(); // Mission Description in English
            $table->text('mission_description_ar')->nullable(); // Mission Description in Arabic
            $table->string('logo')->nullable(); // About Us Logo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
