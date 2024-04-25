<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homestays extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'features', 'room_size', 'occupancy', 'view', 'smoking', 'bed_size', 'location', 'room_service', 'swimming_pool'
    ];

    public function images()
    {
        return $this->hasMany(HomestaysImage::class);
    }
}
