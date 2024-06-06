<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    const ROLE_ADMIN = 'admin';
    const ROLE_OWNER = 'owner';
    const ROLE_USER = 'user';

    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'no_hp',
        'verified',
        'role',
    ];

    public function homestays()
    {
        return $this->hasMany(Homestays::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function isAdmin()
    {
        return $this->role === self::ROLE_ADMIN;
    }

    public function isOwner()
    {
        return $this->role === self::ROLE_OWNER;
    }

    public function isUser()
    {
        return $this->role === self::ROLE_USER;
    }
}
