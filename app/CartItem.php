<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $table='cart_item';
    function product(){
        return $this->hasOne('App\Product','id','product_id');
    }
}
