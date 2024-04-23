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
        Schema::create('about_features', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('subtitle');
            $table->string('title');
            $table->text('description');
            $table->string('inner_icon_1');
            $table->string('icon_title_1');
            $table->string('inner_icon_2');
            $table->string('icon_title_2');
            $table->string('inner_icon_3');
            $table->string('icon_title_3');
            $table->string('inner_icon_4');
            $table->string('icon_title_4');
            $table->string('inner_icon_5');
            $table->string('icon_title_5');
            $table->string('inner_icon_6');
            $table->string('icon_title_6');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutfeatures');
    }
};
