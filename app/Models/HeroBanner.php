<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroBanner extends Model
{
    use HasFactory;
    protected $fillable = [
        'subtitle',
        'title',
        'description',
        'button_text_1',
        'button_link_1',
        'file',
    ];
    // public static $rules = [
    //      // Adjust validation rules as needed
    //     'subtitle' => 'required|string|max:255',
    //     'title' => 'required|string|max:255',
    //     'description' => 'required|string',
    //     'button_text_1' => 'required|string|max:255',
    //     'button_link_1' => 'required|string|max:255|url',
    //     'button_text_2' => 'nullable|string|max:255',
    //     'button_link_2' => 'nullable|string|max:255|url',
    //     'file' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
    // ];
}
