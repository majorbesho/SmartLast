<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'summary',
        'discreption',
        'cat_id',
        'supplier_id',
        'brand_id',
        'child_cat_id',
        'photo',
        'status',
        'conditaion',
        'stok',
        'price',
        'offer_price',
        'discount',
        'Caturl',
        'type',
        'group_products_id',
        'chk'
    ];
    public function brand(){
        return $this->belongsTo('\App\Models\Brand');
        }
        public function listProductGroup(){
            return $this->hasMany('\App\Models\product','group_products_id','id')->where('status','active');
            }

            public function order(){
                return $this->belongsToMany(order::class,'product_orders')->withPivot('qty')
               ;
            }
            public static function getProductBycart($id){
                return self::where('id',$id)->get()->toArray();
            }
}



