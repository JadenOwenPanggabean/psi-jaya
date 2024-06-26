<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'user_id',
        'description',
        'image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
