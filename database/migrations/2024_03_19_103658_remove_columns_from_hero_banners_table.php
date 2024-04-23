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
        Schema::table('hero_banners', function (Blueprint $table) {
            $table->dropColumn(['button_text_2', 'button_link_2']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hero_banners', function (Blueprint $table) {
            $table->string('button_text_2');
            $table->string('button_link_2');
        });
    }
};
