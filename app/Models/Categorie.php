<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Rinvex\Categories\Models\Category;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
    ];
    public function products()
    {
        return $this->hasMany(Product::class, 'categorie_id');
    }
}
