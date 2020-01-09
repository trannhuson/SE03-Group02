<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Customer;
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
    public function checkout(){
        return view('homepage.checkout');
    }
    public function confirmation(){
        return view('homepage.confirmation');
    }
    public function login(){
        return view('homepage.login');
    }
    public function postLogin(Request $request){
        $this->validate($request,
            [
                'username'=>'required',
                'password'=>'required|min:3|max:32',
            ],
            [
                'username.required'=>'Bạn chưa nhập username',
                'password.required'=>'Bạn chưa nhập password',
                'password.min'=>'Password không được nhỏ hơn 3 ký tự',
                'password.max'=>'Password không được dài quá 32 ký tự'
            ]);
        if((Auth::Customer()->username == $request->username) && (Auth::Customer()->password == $request->password)){
            return redirect('homepage'); // đưa người dùng vào tragn đăng nhập
        }else{
            return redirect('shop/login')->with('thongbao','Đăng nhập không thành công');
        }
    }
    public function registration(){
        return view('homepage.registration');
    }
    public function postRegistration(Request $request){
        $this->validate($request,
            [
                'name'=>'required|min:3',
                'email'=>'required|email|unique:users,email',// unique: có ngĩa là email không được trùng trong bảng users
                'password'=>'required|min:3|max:32',
                'passwordAgain'=>'required|same:password'
            ],
            [
                'name.required'=>'Bạn chưa nhập tên người dùng',
                'name.min'=>'Tên người dùng phải có ít nhất 3 ký tự',
                'email.required'=>'Bạn chưa nhập email',
                'email.email'=>'Bạn chưa nhập đúng định dạng email',
                'email.unique'=>'Email đã tồn tại',
                'password.required'=>'Bạn chưa nhập mật khẩu',
                'password.min'=>'Mật khẩu phải có ít nhất 3 ký tự',
                'password.max'=>'Mật khẩu chỉ được phép tối đa 32 ký tự',
                'passwordAgain.required'=>'Bạn chưa nhập lại mật khẩu',
                'passwordAgain.same'=>'Mật khẩu nhập lại chưa khớp'

            ]);
        $customers = new Customer;
        $customers->name = $request->name;
        $customers->username = $request->username;
        $customers->password = bcrypt($request->password); // bcrypt là để mã hóa mật khẩu
        $customers->email = $request->email;
        $customers->address = $request->address;
        $customers->phone_number = $request->phone;
        
        $customers->save();

        return redirect('shop/registration')->with('thongbao','Chúc mừng bạn đã đăng ký  thành công');

    }
    public function tracking(){
        return view('homepage.tracking');

        

    }
}
