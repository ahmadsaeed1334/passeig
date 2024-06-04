<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Rinvex\Categories\Models\Category;

class Categorie extends Category
{
    use HasFactory;
    protected $fillable = [
        'icon',
        'name',
    ];
    public function giveaways()
    {
        return $this->morphedByMany(Giveaway::class, 'categorizable');
    }
}
