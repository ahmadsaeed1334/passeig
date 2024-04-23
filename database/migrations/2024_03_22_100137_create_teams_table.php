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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('subtitle')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('team_image_1')->nullable();
            $table->string('team_name_1')->nullable();
            $table->string('team_designation_1')->nullable();
            $table->string('team_image_2')->nullable();
            $table->string('team_name_2')->nullable();
            $table->string('team_designation_2')->nullable();
            $table->string('team_image_3')->nullable();
            $table->string('team_name_3')->nullable();
            $table->string('team_designation_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
