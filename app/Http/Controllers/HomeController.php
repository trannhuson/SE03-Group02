<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Customer;
use App\Product;
use App\Category;
use App\Brand;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */



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

    public function brand($type){
        $sp_theoHang = Product::where('brand_id', $type)->paginate(12);
        $sp_khac = Product::where('brand_id','<>',$type)->paginate(12);
        $hang_sp = Brand::where('id', $type)->first();
        $categorys = Category::all();
        $brands = Brand::all();
        return view('homepage.brand')->with(['brand'=>$brands,'category'=>$categorys, 'sp_theoHang'=>$sp_theoHang,'hang_sp'=>$hang_sp,'sp_khac'=>$sp_khac]);
    }

    public function category($type){
        $sp_theoloai = Product::where('category_id', $type)->paginate(12);
        $sp_khac = Product::where('category_id','<>',$type)->paginate(12);
        $loai_sp = Category::where('id',$type)->first();
        $categorys = Category::all();
        $brands = Brand::all();
        return view('homepage.category')->with(['category'=>$categorys,'brand'=>$brands,'sp_theoloai'=>$sp_theoloai,'loai_sp'=>$loai_sp,'sp_khac'=>$sp_khac]);
    }
    public function checkout(){
        return view('homepage.checkout');
    }
    public function confirmation(){
        return view('homepage.confirmation');
    }
    public function login(){
        if(Auth::guard('customer')->check()){
            return redirect('shop/homepage');
        }
        return view('homepage.login');
    }
    public function postLogin(Request $request){
        $this->validate($request,
            [
                'email'=>'required',
                'password'=>'required|min:3|max:32',
            ],
            [
                'email.required'=>'Bạn chưa nhập username',
                'password.required'=>'Bạn chưa nhập password',
                'password.min'=>'Password không được nhỏ hơn 3 ký tự',
                'password.max'=>'Password không được dài quá 32 ký tự'
            ]);
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::guard('customer')->attempt($arr)){
            return redirect('shop/homepage'); // đưa người dùng vào tragn đăng nhập
        }else{
            return redirect('shop/login')->with('thongbao','Đăng nhập không thành công');
        }
    }
    public function logout()
    {
        if(Auth::guard('customer')->check()){
            Auth::guard('customer')->logout();
            return redirect('shop/homepage');
        }
        else{
            return redirect('shop/login');
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
