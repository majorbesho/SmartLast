<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckoutData extends Model
{

    use HasFactory;
    protected $table = 'checkout_data';
    protected $fillable = [
        'reference',
        'user_id',
        'payment_data',
        'order_data',
        'status',
        'total',
        'order_id',

    ];
    protected $casts = [
        'order_data' => 'array',
        'payment_data' => 'array',
    ];
    public function store($params)
    {
        return CheckoutData::create($params);
    }


    public function fetch($params)
    {
        return CheckoutData::where($params)->first();
    }
}
