<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =['name','id'];

    function product(){
        return $this->hasMany('App\Product','product_id','id');
    }

    function brand(){
    	 return $this->hasMany('App\Brand','brand_id','id');
    }
}
