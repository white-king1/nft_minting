<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'ethereum', 'title', 'description', 'account_number',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function wallet(): HasOne
    {
        return $this->hasOne(Wallet::class, 'user_id', 'id', 'account_number');
    }

    public function Upload(): HasMany
    {
        return $this->hasMany(Upload::class);
    }

    public function withdrawal(): HasMany
    {
        return $this->hasMany(withdrawal::class, 'user_id', 'id', 'account_number', 'withdrawal_amount', 'crypto_currency', 'wallet_address');
    }

    public function deposit(): HasMany
    {
        return $this->hasMany(deposit::class, 'user_id', 'id', 'account_number', 'deposi_amount', 'crypto_currency');
    }
}

