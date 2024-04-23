<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopAffiliate extends Model
{
    use HasFactory;
    protected $fillable = [
        'subtitle',
        'title',
        'description',
        'card_image_1',
        'card_name_1',
        'card_amount_1',
        'card_image_2',
        'card_name_2',
        'card_amount_2',
        'card_image_3',
        'card_name_3',
        'card_amount_3',
    ];
}
