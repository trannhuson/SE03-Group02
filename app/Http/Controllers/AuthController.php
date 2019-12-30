<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   
    function login(){
    	return view('login.dangnhap');
    }
    function postLogin(Request $request){

        $this->validate($request,
            [
                'email'=>'required',
                'password'=>'required|min:3|max:32'
            ],
            [
                'email.required'=>'Bạn chưa nhập email',
                'password.required'=>'Bạn chưa nhập password',
                'password.min'=>'Password không được nhỏ hơn 3 ký tự',
                'password.max'=>'Password không được dài quá 32 ký tự'
            ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('admin/dashboard'); // đưa người dùng vào tragn admin
        }else{
            return redirect('admin/login')->with('thongbao','Đăng nhập không thành công');
        }
    }
}
