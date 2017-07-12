<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class memberModel extends Authenticatable
{
    protected $table = 'member';
    protected $fillable = ['name', 'email', 'password', 'provider', 'loginID'];
    public $timestamps  = false;
    //  public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    // public static $rules = array();

    // public function getAuthPassword()
    // {
    //    echo  $this->password;
    //     return $this->password;
    // }    




}
