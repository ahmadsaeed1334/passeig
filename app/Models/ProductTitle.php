<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTitle extends Model
{
    use HasFactory;
    protected $fillable = ['title','long_description'];

}
