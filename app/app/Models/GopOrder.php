<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GopOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'gop_id',
        'order_id',
        'qty',

    ];






}
