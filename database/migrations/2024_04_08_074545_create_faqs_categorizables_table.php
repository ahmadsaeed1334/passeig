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
        Schema::create('faqs_categorizables', function (Blueprint $table) {
            $table->integer('category_id')->unsigned();
             $table->morphs('categorizable');
             $table->timestamps();
 
             // Indexes
             $table->unique(['category_id', 'categorizable_id', 'categorizable_type'], 'categorizables_ids_type_unique');
             $table->foreign('category_id')->references('id')->on('faqs_categories')
                   ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faqs_categorizables');
    }
};
