<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyTicket extends Model
{
    use HasFactory;
    protected $fillable = [
        'subtitle',
        'title',
        'description',
        'btn_title',
        'btn_text',
        'cart_top_text',
        'cart_amount_1',
        'cart_text_1',
        'cart_amount_2',
        'cart_text_2'
    ];
}
