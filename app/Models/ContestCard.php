<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContestCard extends Model
{
    use HasFactory;
    protected $fillable = [
        'card_icon',
        'card_title',
        'card_description',
    ];
}
