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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('subtitle');
            $table->string('title');
            $table->text('description');
            $table->string('slider_image_1');
            $table->string('client_name_1');
            $table->text('slider_description_1');
            $table->string('slider_image_2');
            $table->string('client_name_2');
            $table->text('slider_description_2');
            $table->string('slider_image_3');
            $table->string('client_name_3');
            $table->text('slider_description_3');
            $table->unsignedTinyInteger('rating')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
