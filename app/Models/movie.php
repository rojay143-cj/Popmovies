<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;

    protected $table = 'movie';

    protected $fillable = [
        'title',
        'type',
        'description',
        'release_date',
        'rt_score'
    ];
}
