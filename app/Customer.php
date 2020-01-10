<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Customer  extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    function wishlist(){
        return $this->hasMany('App\Wishlist','id_customer','id');
    }

}
