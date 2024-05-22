<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Use BelongsTo for user relationship

class Wallet extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'balance', 'owner_type', 'owner_id'];

    public function owner(): MorphTo
    {
        return $this->morphTo();
    }
    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
    
    
}
