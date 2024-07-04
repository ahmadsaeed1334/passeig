<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'image', 'button', 'user_id', 'category_id'
    ];

    // Define the relationship with BlogCategories
    public function category() {
        return $this->belongsTo(BlogCategorie::class, 'category_id');
    }

    // Define the relationship with User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
