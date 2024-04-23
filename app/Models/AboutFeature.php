<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutFeature extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'subtitle',
        'title',
        'description',
        'inner_icon_1',
        'icon_title_1',
        'inner_icon_2',
        'icon_title_2',
        'inner_icon_3',
        'icon_title_3',
        'inner_icon_4',
        'icon_title_4',
        'inner_icon_5',
        'icon_title_5',
        'inner_icon_6',
        'icon_title_6',
    ];
}
