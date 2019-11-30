<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function AddProduct(){
        return view('admin.product.createproduct');
    }
}
