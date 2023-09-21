<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class supplier extends Authenticatable
{
    use HasFactory;
    protected $guard = 'suppliers';
    protected $fillable = [
    'title',
    'password',
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
