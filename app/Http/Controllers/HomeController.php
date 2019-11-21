<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index()
    {
        return view('homepage.index');
    }
    public function blog(){
        return view('homepage.blog');
    }
    public function blogSingle(){
        return view('homepage.blog_single');
    }
    public function cart(){
        return view('homepage.cart');
    }
}
