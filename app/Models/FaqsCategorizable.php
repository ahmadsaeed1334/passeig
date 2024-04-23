<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqsCategorizable extends Model
{
    use HasFactory;
    protected $table = 'faqs_categorizables';

    protected $fillable = ['category_id', 'categorizable_id', 'categorizable_type'];

    public $timestamps = true;

    public function categories()
    {
        return $this->belongsTo(FaqsCategory::class, 'category_id'); 
    }
    

    public function categorizable()
    {
        return $this->morphTo();
    }
}
