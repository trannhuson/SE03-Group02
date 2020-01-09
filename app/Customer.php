<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    function wishlist(){
        return $this->hasMany('App\Wishlist','id_customer','id');
    }
    
}
