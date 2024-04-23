<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HowToPlay extends Model
{
    use HasFactory;
    protected $fillable = [
        'subtitle',
        'title',
        'description',
        'play_card_icon_1',
        'play_card_title_1',
        'play_card_description_1',
        'play_card_icon_2',
        'play_card_title_2',
        'play_card_description_2',
        'play_card_icon_3',
        'play_card_title_3',
        'play_card_description_3',
    ];
}
