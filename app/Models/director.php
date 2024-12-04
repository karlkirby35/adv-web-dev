<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class director extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image ' , 'bio'];

    public function series()
    {
        return $this->belongsToMany(Series::class);
    }
}
