<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'subtitle',
        'title',
        'description',
        'team_image_1',
        'team_name_1',
        'team_designation_1',
        'team_image_2',
        'team_name_2',
        'team_designation_2',
        'team_image_3',
        'team_name_3',
        'team_designation_3',
    ];
}
