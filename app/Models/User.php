<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;

use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use Lab404\Impersonate\Models\Impersonate;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Cmgmyr\Messenger\Traits\Messagable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use Messagable;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use Impersonate;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'verification_code', 'is_verified', 'profile_photo_path', 'user_type'

    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
    ];
    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeCustomer($query)
    {
        return $query->where('user_type', 2);
    }

    public function scopeVendor($query)
    {
        return $query->where('user_type', 1);
    }

    public function scopeStaff($query)
    {
        return $query->where('user_type', 0);
    }

    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->user_type = 2; // Default user_type to 2
        });
    }
    public function scopeSearch($query, $value)
    {
        if ($value) {
            return $query->where('name', 'LIKE', "%{$value}%")
                ->orWhere('id', 'LIKE', "%{$value}%")
                ->orWhere('email', 'LIKE', "%{$value}%");
        } else {
            return $query;
        }
    }
    // public function threads()
    // {
    //     return $this->hasMany(Thread::class);
    // }
}
