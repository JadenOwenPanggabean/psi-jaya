<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'homestays_id',
        'in',
        'out',
        'peoples'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function homestay()
    {
        return $this->belongsTo(Homestays::class);
    }
}
