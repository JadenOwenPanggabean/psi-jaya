<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomestaysImage extends Model
{
    protected $fillable = ['homestays_id', 'image_location'];

    public function homestay()
    {
        return $this->belongsTo(Homestays::class);
    }
}
