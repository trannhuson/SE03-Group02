<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function homepage()
    {
        return view('homepage.index');
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
    public function product(){
        return view('homepage.product');
    }
    public function regular(){
        return view('homepage.regular');
    }
    public function category(){
        return view('homepage.category');
    }
    public function checkout(){
        return view('homepage.checkout');
    }
    public function confirmation(){
        return view('homepage.confirmation');
    }
    public function login(){
        return view('homepage.login');
    }
    public function registration(){
        return view('homepage.registration');
    }
    public function tracking(){
        return view('homepage.tracking');
    }
}
