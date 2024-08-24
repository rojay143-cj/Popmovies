<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class moviecountry extends Model
{
    use HasFactory;

    protected $table = "moviecountry";

    protected $fillable = [
        'country_id',
        'movie_id',
    ];
}
