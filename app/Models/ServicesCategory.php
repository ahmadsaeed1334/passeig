<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'icon_image',
        'parent_id',
    ];

    public function subcategories()
    {
        return $this->hasMany(ServicesCategory::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(ServicesCategory::class, 'parent_id');
    }

    public function appointmentServices()
    {
        return $this->hasMany(AppointmentService::class, 'service_category_id');
    }
    public function services()
    {
        return $this->hasMany(AppointmentService::class, 'service_category_id');
    }
}