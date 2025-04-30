<?php

namespace App\Models;


use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function wishlist()
{
    return $this->hasMany(Wishlist::class);
}

public function likes()
{
    return $this->hasMany(Like::class);
}
}
