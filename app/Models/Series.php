<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use hasFactory;

    protected $fillable = [
        'title',
        'description',
        'year',
        'image',
        'created_at',
        'updated_at',
    ];
}
