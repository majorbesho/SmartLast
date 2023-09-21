<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['WHATWEDO','OURMISSION',
    'WHYCHOOSEUS','ProductsandServices',
    'no1','text1',
    'no2','text2',
    'no3','text3',
    'no4','text4',
    'text5',
    'address','city',
    'text5','title','content',
    'smallContent',
];



}
