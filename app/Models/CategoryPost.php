<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    use HasFactory;
    protected $table = 'category_posts';

    public function posts()
{
    return $this->belongsToMany(Post::class);
}
public function categories()
{
    return $this->belongsToMany(BlogCategorie::class);
}



}
