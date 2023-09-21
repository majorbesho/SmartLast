<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groupProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'discreption',
        'photo',
        'status',
        'Caturl',
        'sdate',
        'edate',
        'price',
        'showPrice',
        'periodID',
        'stock',
        'supplier',
        'showx',
        'producttypeid',
        'suppliers_id'


        //shoud add vendor ID


    ];


    public function products(){
        return $this->hasMany('\App\Models\product','group_products_id','id');
    }
    public static function getProductBycart($id){
        return self::where('id',$id)->get()->toArray();
    }

    public function orders(){
        return $this->belongsToMany(order::class,'gop_orders')
        ->withPivot('qty')->withTimestamps()
        ;
    }

}
