<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'top_title',
        'title',
        'description_1',
        'description_2',
        'number_1',
        'title_1',
        'number_2',
        'title_2',
        'number_3',
        'title_3',
    ];
}
