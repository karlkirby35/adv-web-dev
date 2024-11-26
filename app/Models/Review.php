<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'rating',
        'comment',
        'series_id',
    ];

    public function series()
    {
        return $this->belongsTo(Series::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
