<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'subtitle',
        'title',
        'description',
        'slider_image_1',
        'client_name_1',
        'rating_1',
        'slider_description_1',
        'slider_image_2',
        'client_name_2',
        'rating_2',
        'slider_description_2',
        'slider_image_3',
        'client_name_3',
        'slider_description_3',
        'rating', // Added rating to fillable fields
    ];
}
