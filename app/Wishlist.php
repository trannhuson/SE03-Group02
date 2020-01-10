<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable =['id_customer','id_product'];
    function customer(){
    	return $this->belongsTo('App\Customer','id_customer','id');
    }
    function products(){
        return $this->hasOne('App\Product','id','id_product');
    }
}
