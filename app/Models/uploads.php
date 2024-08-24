<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uploads extends Model
{
    use HasFactory;

    protected $table = "uploads";

    protected $fillable = [
        'movie_id',
        'poster_url',
        'trailer_url',
        'video_url',
    ];
}
