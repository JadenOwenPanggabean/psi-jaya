<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homestays extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'slug',
        'description',
        'features',
        'room_size',
        'occupancy',
        'view',
        'smoking',
        'bed_size',
        'location',
        'room_service',
        'swimming_pool',
        'available',
    ];

    public function images()
    {
        return $this->hasMany(HomestaysImage::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
