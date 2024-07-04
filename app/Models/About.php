<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_1',
        'description_1',
        'image_1',
        'title_2',
        'description_2',
        'image_2',
    ];
}
