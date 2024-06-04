<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositRequest extends Model
{
    use HasFactory;
    protected $table = 'deposit_requests';
    protected $fillable = [
        'user_id',
        'amount',
        'file_path',
        'comment',];
        public function user()
        {
            return $this->belongsTo(User::class);
        }
}
