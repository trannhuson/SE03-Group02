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



Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin/login','AuthController@login');
Route::post('admin/login','AuthController@postLogin');

Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
    
     Route::get('/dashboard', function (){
         return view('admin.dashboard.dashboard');
     });
    
    Route::group(['prefix'=>'/product'],function(){
        Route::get('/add','ProductController@AddProduct');
        Route::post('/add','ProductController@SaveProduct');
        Route::get('/list','ProductController@ListProduct');
        Route::get('/edit/{id}','ProductController@EditProduct');
        Route::post('/edit/{id}','ProductController@postEditProduct');
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

Route::group(['prefix'=>'/shop'],function(){
    Route::get('homepage','HomeController@homepage');
    Route::get('blog-detail','HomeController@blogdetail');
    Route::get('blog','HomeController@blog');
    Route::get('cart','HomeController@cart');
    Route::get('contact','HomeController@contact');
    Route::get('product/{id}','HomeController@product');
    Route::get('regular','HomeController@regular');
    Route::get('category/{type}',['as'=>'categorys','uses'=>'HomeController@category']);
    Route::get('checkout','HomeController@checkout');
    Route::get('confirmation','HomeController@confirmation');
    Route::get('login','HomeController@login');
    Route::post('login','HomeController@postLogin');
    Route::get('registration','HomeController@registration');
    Route::post('registration','HomeController@postRegistration') ; 
    Route::get('tracking','HomeController@tracking');
    Route::get('fillter','HomeController@Fillter');
});


