<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiveawaySpecification extends Model
{
    use HasFactory;
    protected $fillable = [ 'giveaway_id','title', 'value', 'card_icon'];

    public function giveaway()
    {
        return $this->belongsTo(Giveaway::class);
    }
}
