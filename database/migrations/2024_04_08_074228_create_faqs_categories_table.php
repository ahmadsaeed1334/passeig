<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Kalnoy\Nestedset\NestedSet;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('faqs_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('name');
            $table->string('description')->nullable();
            NestedSet::columns($table);
            $table->timestamps();
            $table->softDeletes();

            // Indexes
            $table->unique('slug');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faqs_categories');
    }
};
