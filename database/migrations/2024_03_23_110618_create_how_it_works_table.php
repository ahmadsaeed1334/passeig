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
        Schema::create('how_it_works', function (Blueprint $table) {
            $table->id();
            $table->string('subtitle');
            $table->string('title');
            $table->text('description');
            $table->string('card_icon_1');
            $table->string('card_title_1');
            $table->text('card_description_1');
            $table->string('card_icon_2');
            $table->string('card_title_2');
            $table->text('card_description_2');
            $table->string('card_icon_3');
            $table->string('card_title_3');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('how_it_works');
    }
};
