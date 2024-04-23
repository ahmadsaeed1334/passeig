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
        Schema::table('testimonials', function (Blueprint $table) {
            $table->unsignedTinyInteger('rating_1')->nullable()->after('slider_description_1');
            $table->unsignedTinyInteger('rating_2')->nullable()->after('slider_description_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('testimonials', function (Blueprint $table) {
            //
        });
    }
};
