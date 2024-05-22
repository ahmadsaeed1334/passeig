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
        Schema::create('category_post', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("category_id")->index();
            $table->unsignedInteger('post_id')->index();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('category_id')->references('id')->on('binshops_categories')->onDelete("cascade");
            $table->foreign('post_id')->references('id')->on('binshops_posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_post');
    }
};
