<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $fillable = [
        'number', 'address', 'description', 'icons', 'working_hours'
    ];

    protected $casts = [
        'icons' => 'array',
    ];
}
