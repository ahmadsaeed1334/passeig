<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = ['title', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
     // Ensure your media collection is registered
     public function registerMediaCollections(): void
     {
         $this->addMediaCollection('gallery')->useDisk('public');
     }
}