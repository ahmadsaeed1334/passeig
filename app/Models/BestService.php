<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestService extends Model
{
    use HasFactory;
    protected $fillable = [
        'top_title',
        'title',
        'description',
        'description_2',
    ];
}
