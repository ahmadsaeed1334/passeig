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
        Schema::create('top_affiliates', function (Blueprint $table) {
            $table->id();
            $table->string('subtitle');
            $table->string('title');
            $table->text('description');
            $table->string('card_image_1');
            $table->string('card_name_1');
            $table->decimal('card_amount_1', 10, 2);
            $table->string('card_image_2');
            $table->string('card_name_2');
            $table->decimal('card_amount_2', 10, 2);
            $table->string('card_image_3');
            $table->string('card_name_3');
            $table->decimal('card_amount_3', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_affiliates');
    }
};
