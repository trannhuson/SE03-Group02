<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Brand;
use App\Product;
class BranchController extends Controller
{
    //
    function AddBranch(){
        return view('admin.brand.create');
    }
    function SaveBranch(Request $request){
        $brand = new Brand($request->all());
        $brand->save();
        $listBrand = Brand::paginate(5);
        return redirect('admin/brand/list')->with('listBrand',$listBrand);
    }
    function ListBranch(){
        $listBrand = Brand::paginate(5);
        return view('admin.brand.list')->with('listBrand',$listBrand);
    }
    function EditBranch($id){
        $brand = Brand::find($id);
        return view('admin.brand.edit',['brand'=>$brand]);
    }
    function postEditBranch(Request $request,$id){
        $brand = Brand::find($id);
        $brand->name = $request->name;
        $brand->save();
        return redirect('admin/brand/list');
    }
    public function BranchDelete($id){
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('admin/brand/list');
    }
}