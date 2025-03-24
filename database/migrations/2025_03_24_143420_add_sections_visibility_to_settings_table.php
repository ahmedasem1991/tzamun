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
        Schema::table('settings', function (Blueprint $table) {
            $table->boolean('show_services_section')->default(true);
            $table->boolean('show_about_us_section')->default(true);
            $table->boolean('show_partner_section')->default(true);
            $table->boolean('show_discuss_section')->default(true);
            $table->boolean('show_contact_us_section')->default(true);
            $table->boolean('show_teams_section')->default(true);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn([
                'show_services_section',
                'show_about_us_section',
                'show_partner_section',
                'show_discuss_section',
                'show_contact_us_section',
                'show_teams_section'
            ]);
        });
    }
};
