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
        Route::get('/list','ProductController@ListProduct');
    });
    Route::group(['prefix'=>'/category'],function(){
        Route::get('/add','CategoryController@AddCategory');
        Route::get('/list','CategoryController@ListCategory');
    });
    Route::group(['prefix'=>'/branch'],function(){
        Route::get('/add','ProductController@AddBranch');
        Route::get('/list','ProductController@ListBranch');
    });

});
