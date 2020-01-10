<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function AddProduct(){
        $listBrand = Brand::all();
        $listCategory = Category::all();
        return view('admin.product.createproduct')
            ->with('listCategory',$listCategory)
            ->with('listBrand',$listBrand);
    }
    //Save Product
    function SaveProduct(Request $request){
        $product = new Product($request->all());
        $product->save();
        $product_images = ProductImage::where('product_id',0)->get();
        foreach ($product_images as $product_image){
            $product_image->update(['product_id'=>$product->id]);
        }
        $listProduct = Product::paginate(5);
        return redirect('admin/product/list')->with('listProduct',$listProduct);
    }
    //upload images
    function postImages(Request $request)
    {
        if ($request->ajax()) {
            if ($request->hasFile('file')) {
                $imageFiles = $request->file('file');
                // set destination path
                //$product_id = Product::max('id')+1;
                $product_id = '0';
                $folderDir = 'uploads/product_images';
                $destinationPath = base_path() . '/' . $folderDir;
                // this form uploads multiple files
                foreach ($request->file('file') as $fileKey => $fileObject) {
                    // make sure each file is valid
                    if ($fileObject->isValid()) {
                        // make destination file name
                        $destinationFileName = time() . $fileObject->getClientOriginalName();
                        // move the file from tmp to the destination path
                        $fileObject->move($folderDir, $destinationFileName);
                        // save the the destination filename
                        $prodcuctImage = new ProductImage();
                        $prodcuctImage->image_path = $folderDir .'/'. $destinationFileName;
                        $prodcuctImage->image_name = $fileObject->getClientOriginalName();
                        $prodcuctImage->product_id = $product_id;
                        $prodcuctImage->save();
                    }
                }
            }
        }
    }
    //Delete images
    function deleteImages(Request $request)
    {
        if ($request->ajax()) {
            ProductImage::where([['image_name',$request->id],['product_id',0]])->delete();
            return $request->id;
        }
    }
    //List Product
    function ListProduct(){
        $listProduct = Product::paginate(10);
        return view('admin.product.list')->with('listProduct',$listProduct);
    }

    function EditProduct($id){
        $listBrand = Brand::all();
        $listCategory = Category::all();
        $product = Product::find($id);
        $brand = Brand::find($id);
        $category = Category::find($id);
        return view('admin.product.edit',['product'=>$product,'listBrand'=>$listBrand,'listCategory'=>$listCategory,'brand'=>$brand,'category'=>$category]);
    }
    function postEditProduct(Request $request,$id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->detail = $request->detail;
        $product->unit_price = $request->unit_price;
        $product->promotion_price = $request->promotion_price;
        $product->quantity = $request->quantity;
        $product->save();
        return redirect('admin/product/list');
    }
    public function dashboard(){
        $product_count = count(Product::all());
        $brand_count = count(Brand::all());
        $category_count = count(Category::all());
        return view('admin.dashboard.dashboard')->with(['product_count'=>$product_count, 'brand_count'=>$brand_count, 'category_count'=>$category_count]);

    }

}
