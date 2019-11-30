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
        $listCategory = Category::all();
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
}
