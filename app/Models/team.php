<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'name',
        // 'jobs',
        'addtext',
        'facebook',
        'twitter',
        'google',
        'slug',
        'discreption',
        'photo',
        'status',

    ];

}
