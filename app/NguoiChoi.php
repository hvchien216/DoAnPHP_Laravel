<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class NguoiChoi extends Authenticatable implements JWTSubject
{
    use SoftDeletes;
    protected $table = 'nguoi_choi';
    
    public function getPasswordAttribute(){
        return $this->mat_khau;
    }


    //override methods of JWTSubject
    public function getJWTIdentifier(){
        return $this->getKey();
    }

    public function getJWTCustomClaims(){
        return [];
    }



    public function luotchoi(){
        return $this->hasMany('App\LuotChoi');
    }

    public function goicredit(){
        return $this->belongstoMany('App\GoiCredit');
    }
}
