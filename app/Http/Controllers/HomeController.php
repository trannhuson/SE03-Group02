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

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function homepage()
    {
        $latestProduct = Product::where('category_id', 1)->whereIn('brand_id', [1, 2])->orderBy('created_at', 'DESC')->limit(8)->get();
        $featureProduct = Product::where('brand_id', 1)->limit(8)->get();
        $accessories1 = Product::whereIn('id', [69, 70, 71])->get();
        $accessories2 = Product::whereIn('id', [72, 73, 74])->get();
        $accessories3 = Product::whereIn('id', [75, 76, 77])->get();
        // d($accessories1);
        return view('homepage.index')->with(['latestProduct'=>$latestProduct, 'featureProduct'=>$featureProduct, 'accessories1'=>$accessories1, 'accessories2'=>$accessories2, 'accessories3'=>$accessories3]);
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
    public function category($type){
        $sp_theoloai = Product::where('category_id', $type)->paginate(12);
        $sp_khac = Product::where('category_id','<>',$type)->paginate(12);
        $loai_sp = Category::where('id',$type)->first();
        $categorys = Category::all();
        $brands = Brand::all();
        return view('homepage.category')->with(['category'=>$categorys,'brand'=>$brands,'sp_theoloai'=>$sp_theoloai,'loai_sp'=>$loai_sp,'sp_khac'=>$sp_khac]);
    }
}
