<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function homepage()
    {
        $featureProduct = Product::orderBy('created_at', 'DESC')->limit(8)->get();
        // dd($featureProduct);
        return view('homepage.index')->with('featureProduct', $featureProduct);
    }
    public function blog(){
        return view('homepage.blog');
    }
    public function blogdetail(){
        return view('homepage.blog-detail');    
    }
    public function cart(){
        return view('homepage.cart');
    }
    public function contact(){
        return view('homepage.contact');
    }
    public function product(Request $request){
        $product_id = $request->id;
        $product = Product::find($product_id);
        return view('homepage.product')->with('product',$product);
    }
    public function regular(){
        return view('homepage.regular');
    }
    public function category(){
        $categorys = Category::all();
        $brands = Brand::all();
        return view('homepage.category')->with(['category'=>$categorys,'brand'=>$brands]);
    }
}
