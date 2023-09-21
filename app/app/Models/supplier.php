<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;
    protected $guard = 'suppliers';
    protected $fillable = [
    'title',
    'company',
    'slug',
    'discreption',
    'photo',
    'status',
    'contactNo',
    'resName',
    'email',
    'tele',
    'web',
    'nots',
    ];


}
