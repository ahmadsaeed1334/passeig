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
        Schema::create('overviews', function (Blueprint $table) {
            $table->id();
            $table->string('subtitle')->nullable();
            $table->string('title');
            $table->text('description');
            $table->string('card_icon_1')->nullable();
            $table->integer('card_number_1')->nullable();
            $table->text('card_description_1')->nullable();
            $table->string('card_icon_2')->nullable();
            $table->integer('card_number_2')->nullable();
            $table->text('card_description_2')->nullable();
            $table->string('card_icon_3')->nullable();
            $table->integer('card_number_3')->nullable();
            $table->text('card_description_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('overviews');
    }
};
