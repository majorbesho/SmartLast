<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Kalnoy\Nestedset\NodeTrait;





class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable,NodeTrait;
    use NodeTrait;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $guard = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
        'photo',
        'phone',
        'phone_verfiy',
        'nationality',
        'dateOfbarth',
        'address',
        'provider',
        'provider_id',
        'is_verified',
        'referral_code',
        'ref_by',
        'no_of_refs',
        'ref_level_id',
        'onesignal_device_id',
        'emp_code'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function socialAccounts(){
        return $this->hasMany(SocialAccount::class);
    }
    public function ref(){
        return $this->hasMany('App\Models\networks','parent_user_id','id');
    }
    public function getrefby(){
        return $this->belongsTo(User::class,'ref_by');
    }
    public function refChlidern(){
        return $this->hasMany(User::class,'ref_by');
    }

    // public function getLftName()
    // {
    //     return 'left';
    // }

    // public function getRgtName()
    // {
    //     return 'right';
    // }

    // public function getParentIdName()
    // {
    //     return 'parent';
    // }

    // // Specify parent id attribute mutator
    // public function setParentAttribute($value)
    // {
    //     $this->setParentIdAttribute($value);
    // }


}


