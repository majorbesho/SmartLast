<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class networks extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'parent_user_id',
        'referral_code',
        'level1',
        'level2',
        'level3',
        'level4',
        'level5',

    ];
public function user(){
   return $this->hasOne(User::class,'id','user_id');
}

}
