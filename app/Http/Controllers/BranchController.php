<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Product;

class BranchController extends Controller
{
    //
    function AddBranch(){
    	$listCategory = Category::all();
        return view('admin.brand.create')
            ->with('listCategory',$listCategory);
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
        $category = Category::all();
        return view('admin.brand.edit',['brand'=>$brand,'category'=>$category]);
    }
    function postEditBranch(Request $request,$id){
        $brand = Brand::find($id);
        $brand->name = $request->name;
        $brand->category_id = $request->category_id;
        $brand->save();
        return redirect('admin/brand/list');
    }
    public function BranchDelete($id){
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('admin/brand/list');
    }
}
