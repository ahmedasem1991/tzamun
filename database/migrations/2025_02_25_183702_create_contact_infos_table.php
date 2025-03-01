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
        Schema::create('contact_infos', function (Blueprint $table) {
            $table->id();
            $table->string('email'); // Email Address
            $table->string('location_en'); // Location (English)
            $table->string('location_ar'); // Location (Arabic)
            $table->string('phone_1'); // Primary Phone Number
            $table->string('phone_2')->nullable(); // Secondary Phone Number (optional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_infos');
    }
};
