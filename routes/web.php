<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', function (){
    return view('admin.dashboard.dashboard');
});

Route::group(['prefix'=>'/admin'],function(){
    Route::get('/dashboard', function (){
        return view('admin.dashboard.dashboard');
    });
    Route::group(['prefix'=>'/product'],function(){
        Route::get('/add','ProductController@AddProduct');
        Route::post('/add','ProductController@SaveProduct');
        Route::get('/list','ProductController@ListProduct');
        Route::post('uploadImg', 'ProductController@postImages');
        Route::post('deleteImg', 'ProductController@deleteImages');
    });
    Route::group(['prefix'=>'/category'],function(){
        Route::get('/add','CategoryController@AddCategory');
        Route::post('/add','CategoryController@SaveCategory');
        Route::get('/list','CategoryController@ListCategory');
        Route::get('/edit/{id}','CategoryController@EditCategory');
        Route::post('/edit/{id}','CategoryController@postEditCategory');
        Route::get('/delete/{id}','CategoryController@DeleteCategory');
    });
    Route::group(['prefix'=>'/brand'],function(){
        Route::get('/add','BranchController@AddBranch');
        Route::get('/list','BranchController@ListBranch');
        Route::post('/add','BranchController@SaveBranch');
        Route::get('/edit/{id}','BranchController@EditBranch');
        Route::post('/edit/{id}','BranchController@postEditBranch');
        Route::get('/delete/{id}','BranchController@BranchDelete');
    });

});
Route::get('/blog',['as'=>'blog','uses'=>'HomeController@blog']);
Route::get('blog_single',['as'=>'blog_signle','uses'=>'HomeController@blogSingle']);
Route::get('cart',['as'=>'cart','uses'=>'HomeController@cart']);
Route::get('/contact',['as'=>'contact','uses'=>'HomeController@contact']);
Route::get('/product',['as'=>'product','uses'=>'HomeController@product']);
Route::get('/regular',['as'=>'regular','uses'=>'HomeController@regular']);
Route::get('/shop',['as'=>'shop','uses'=>'HomeController@shop']);

