<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'description', 
        'duration', 
        'release_year', 
        'genre', 
        'language', 
        'director', 
        'starring', 
        'subtitles', 
        'rating', 
        'poster_url',
        'trailer_url',
    ];
}
