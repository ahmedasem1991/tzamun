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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('icon'); // Icon class (e.g., 'bx bxl-react')
            $table->string('title_en'); // Service Title (English)
            $table->string('title_ar'); // Service Title (Arabic)
            $table->text('description_en'); // Description (English)
            $table->text('description_ar'); // Description (Arabic)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
