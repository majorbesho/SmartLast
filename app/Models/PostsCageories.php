<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class PostsCageories extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = [
        'title', 'content', 'smallContent'
    ];
    protected $fillable = [

        'id', 'photo', 'parent', 'created_at', 'updated_at', 'deleted_at'

    ];

    protected $table='post_categories';


}


//https://www.youtube.com/watch?v=uFC46pRrfyM&list=PLf5ATZslqO1cIRQXgUR86U5kVftk7ZjVA&index=4
