<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $fillable =['name','product_id'];
    function product(){
        return $this->hasMany('App\Product','product_id','id');
    }
}
