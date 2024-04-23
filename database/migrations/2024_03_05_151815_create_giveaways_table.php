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
        Schema::create('giveaways', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('short_description');
            $table->text('long_description');
            $table->decimal('fee', 8, 2);
            $table->timestamp('start_date')->nullable(); // Allow null values
            $table->timestamp('due_date')->nullable();  // Allow null values
            $table->decimal('actual_price');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('file_path');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giveaways');
    }
};
