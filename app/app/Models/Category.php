<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'discreption',
        'photo',
        'status',
        'is_parent',
        'parent_id',
        'Caturl',
    ];
    public static function shiftChild($cat_id){
        return  Category::where('id',$cat_id)->update(['is_parent',1]);
    }
    public function products(){
        return $this->hasMany('\App\Models\product','cat_id','id');
    }
    //getChildByCategoryId
    public static function getChildByCategoryId ($id){
        return Category::where('parent_id',$id)->get();
    }

      //getChildByCategoryId
      public static function listProductGroup ($id){
        return Category::where('parent_id',$id)->get();
    }


}
