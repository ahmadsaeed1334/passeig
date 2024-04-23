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
        Schema::create('buy_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('subtitle');
            $table->string('title');
            $table->text('description');
            $table->string('btn_title');
            $table->string('btn_text');
            $table->string('cart_top_text');
            $table->decimal('cart_amount_1', 10, 2);
            $table->string('cart_text_1');
            $table->decimal('cart_amount_2', 10, 2);
            $table->string('cart_text_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buy_tickets');
    }
};
