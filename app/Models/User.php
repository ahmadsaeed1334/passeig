<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Cmgmyr\Messenger\Traits\Messagable;
use Illuminate\Support\Facades\Cache;
use Lab404\Impersonate\Models\Impersonate;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use HPWebdeveloper\LaravelPayPocket\Interfaces\WalletOperations;
use HPWebdeveloper\LaravelPayPocket\Traits\ManagesWallet;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use HPWebdeveloper\LaravelPayPocket\Facades\LaravelPayPocket;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable implements WalletOperations
{
    use HasApiTokens;
    use Messagable;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use Impersonate;
    use ManagesWallet;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'profile_photo_path',
        'status',
        'user_type',
        'last_seen',
        'lang',
        'date_of_birth',
        'useraddress',
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
    public function wallet()
    {
        return $this->hasOne(Wallet::class, 'owner_id');
    }
    
public function walletLog()
{
    return $this->hasOne(WalletLog::class,'id');
}

public function favorites(){
    return $this->hasMany(Favorite::class,'user_id');
}


 /**
     * Enter your own logic (e.g. if ($this->id === 1) to
     *   enable this user to be able to add/edit blog posts
     *
     * @return bool - true = they can edit / manage blog posts,
     *        false = they have no access to the blog admin panel
     */
    public function canManageBinshopsBlogPosts()
    {
        // Enter the logic needed for your app.
        // Maybe you can just hardcode in a user id that you
        //   know is always an admin ID?

        if (       $this->id === 1
             && $this->email === "ahmadsaeed@gmail.com"
           ){

           // return true so this user CAN edit/post/delete
           // blog posts (and post any HTML/JS)

           return true;
        }

        // otherwise return false, so they have no access
        // to the admin panel (but can still view posts)

        return false;
    }

}
