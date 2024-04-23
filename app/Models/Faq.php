<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'answer',
    ];
    public function categories()
{
    // The second parameter is the name of the relationship, not the table name.
    return $this->morphToMany(FaqsCategory::class, 'categorizable', 'faqs_categorizables', 'categorizable_id', 'category_id');
}
}
