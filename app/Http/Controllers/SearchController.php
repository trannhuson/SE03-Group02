<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchByName(Request $request)
    {
        $products = Product::where([['name', 'like', '%' . $request->value . '%']])->get();

        return response()->json($products);
    }

    public function searchByCategory(Request $request)
    {
        $categories = Category::where('name', 'like', '%' . $request->value . '%')->get();

        return response()->json($categories);
    }
}
