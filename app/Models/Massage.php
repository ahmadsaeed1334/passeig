<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Massage extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'short_description', 'image', 'long_description',
        'price'];
    public function related_services()
    {
        // Adjust the logic as needed to fetch related services
        return $this->where('id', '!=', $this->id)->take(4)->get();
    }

}
