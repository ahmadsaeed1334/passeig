<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BlogCategorie extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'slug'];

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }

    public function publishedPosts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, function ($query) {
            $query->where('active', '=', 1)
                ->whereDate('published_at', '<', Carbon::now());
        });
    }
}
