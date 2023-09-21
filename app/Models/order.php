<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;


    protected $fillable = [
        //not
        'user_id',
        'order_number',

        'total_amount',
        'coupon',
        'delivery_charge',
        'quantity',
        'email',
        'phone',
        'startdate',
        'enddate',
        'user_name',
        'note',
        'payment_method',
        'payment_status',
        'condition',
        'sessoin_id',
        'empid',
        'product_type',
        //shoud add vendor ID
    ];
    public function products(){
        return $this->belongsToMany(product::class,'productorders')->withPivot('qty');
    }

    //return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    public function gproduct(){
        return $this->belongsToMany(groupProduct::class,'gop_orders','order_id','gop_id')
        ->withPivot('qty')
        ->withTimestamps()
        ;
    }

}
