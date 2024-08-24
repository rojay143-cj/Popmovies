<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class moviecast extends Model
{
    use HasFactory;

    protected $table = "moviecast";

    protected $fillable = [
        'prod_id',
        'movie_id',
    ];
}
