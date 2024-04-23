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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('top_title');
            $table->string('title');
            $table->text('description_1');
            $table->text('description_2');
            $table->string('number_1');
            $table->string('title_1');
            $table->string('number_2');
            $table->string('title_2');
            $table->string('number_3');
            $table->string('title_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
