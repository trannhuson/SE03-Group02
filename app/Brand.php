<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $fillable =['name','category_id','product_id'];
    function product(){
        return $this->hasMany('App\Product','product_id','id');
    }
    function category(){
    	return $this->belongsTo('App\Category','category_id','id');
    }
}
