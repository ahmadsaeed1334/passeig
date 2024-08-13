<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentService extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_name',
        'duration',
        'amount',
        'service_category_id',
        'image',        // Add this line
        'description',  // Add this line
    ];

    public function serviceCategory()
    {
        return $this->belongsTo(ServicesCategory::class, 'service_category_id');
    }

    // public function category()
    // {
    //     return $this->belongsTo(ServicesCategory::class, 'service_category_id');
    // }
}
