<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
class WalletLog extends Model
{
    use HasFactory;
    
    protected $fillable = ['wallet_name', 'value', 'from', 'to', 'type', 'status', 'ip', 'notes', 'reference'];

    public function loggable(): MorphTo
    {
        return $this->morphTo();
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function wallet()
    {
        return $this->hasOne(Wallet::class, 'owner_id');
    }
}
