<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    //
    function customer(){
    	return $this->belongsTo('App\Customer','id_customer','id');
    }
}
