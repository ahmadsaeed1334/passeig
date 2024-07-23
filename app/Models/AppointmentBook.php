<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentBook extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
        'date',
        'time',
        'end_time',
        'status',
    ];

    public function service()
    {
        return $this->belongsTo(AppointmentService::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}