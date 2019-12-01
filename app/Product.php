<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','category_id','brand_id','detail','image_id','unit_price','promotion_price','quantity'];


    function category(){
        return $this->belongsTo('App\Category','category_id','id');
    }
    function brand(){
        return $this->belongsTo('App\Brand','brand_id','id');
    }
    function images(){
        return $this->hasMany('App\ProductImage','product_id','id');
    }
}
