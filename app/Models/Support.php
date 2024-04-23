<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;
    protected $fillable = [
        'subtitle',
        'title',
        'description',
        'card_icon_1',
        'card_title_1',
        'card_description_1',
        'card_number_1',
        'card_email_1',
        'card_icon_2',
        'card_title_2',
        'card_description_2',
    ];
}
