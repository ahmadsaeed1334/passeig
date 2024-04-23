<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class FaqsCategory extends Model
{
    use HasFactory;
    use NodeTrait;

    protected $table = 'faqs_categories';

    protected $fillable = ['slug', 'name', 'description'];

    public $timestamps = true;

    public function faqs()
    {
        // The second parameter is the name of the relationship, not the table name.
        return $this->morphedByMany(Faq::class, 'categorizable', 'faqs_categorizables', 'category_id', 'categorizable_id');
    }
}
