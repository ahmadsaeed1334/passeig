<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Rinvex\Categories\Models\Category;
use Rinvex\Categories\Traits\Categorizable;
use Abbasudo\Purity\Traits\Filterable;
use Abbasudo\Purity\Traits\Sortable;

class Giveaway extends Model
{
    use HasFactory;
    use Categorizable;
    use Filterable;
    use Sortable;

    protected $fillable = [
        'subtitle',     
        'title',
        'description',
        'name',
        'short_description',
        'long_description',
        'rich_text',
        'fee',
        'start_date',   
        'due_date',
        'actual_price',
        'status',
        'file_path',
        'file_type',
    ];

    public function entries()
    {
        return $this->hasMany(GiveawayEntry::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'giveaway_entries', 'giveaway_id', 'user_id');
    }
    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }
    public function specifications()
    {
        return $this->hasMany(GiveawaySpecification::class);
    }
    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'giveaway_id');
    }

    public function isFavorited()
    {
        return $this->favorites()->where('user_id', Auth::id())->exists();
    }
    
    
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'giveaways.subtitle' => 10,
            'giveaways.title' => 10,
            'giveaways.description' => 10,
            'giveaways.name' => 10,
            'giveaways.short_description' => 10,
            'giveaways.long_description' => 10,
        ],
    ];

}
