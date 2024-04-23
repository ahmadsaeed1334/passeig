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
        Schema::create('giveaway_specifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('giveaway_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('value');
            $table->string('card_icon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giveaway_specifications');
    }
};
