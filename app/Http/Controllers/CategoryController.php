<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //return form add category
    function AddCategory(){
        return view('admin.category.create');
    }
    //return view list category
    function ListCategory(){
        $listCategory = Category::paginate(5);
        return view('admin.category.list')->with('listCategory',$listCategory);
    }
    function SaveCategory(Request $request){
        if($request->name){
            $category = new Category();
            $category->name = $request->name;
            $category->save();
        }
        $listCategory = Category::all();
        return view('admin.category.list')->with('listCategory',$listCategory);
    }
    function EditCategory($id){
        $category = Category::find($id);
        return view('admin.category.edit',['category'=>$category]);
    }
    function postEditCategory(Request $request,$id){
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect('admin/category/list');
    }
    function DeleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('admin/category/list');
    }
}
