<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Mendefinisikan peran pengguna
    const ROLE_ADMIN = 'admin';
    const ROLE_HOMESTAY_OWNER = 'homestay_owner';
    const ROLE_USER = 'user';

    // Kolom yang dapat diisi
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'no_hp',
        'verified',
        'role', // tambahkan 'username' ke fillable
    ];

    // Metode untuk mengecek apakah pengguna adalah Admin
    public function isAdmin()
    {
        return $this->role === self::ROLE_ADMIN;
    }

    // Metode untuk mengecek apakah pengguna adalah Pemilik Homestay
    public function isHomestayOwner()
    {
        return $this->role === self::ROLE_HOMESTAY_OWNER;
    }

    // Metode untuk mengecek apakah pengguna adalah Pengguna biasa
    public function isUser()
    {
        return $this->role === self::ROLE_USER;
    }

    public function homestays()
    {
        return $this->hasMany(Homestays::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
