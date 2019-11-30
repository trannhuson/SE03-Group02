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
Route::get('/blog',['as'=>'blog','uses'=>'HomeController@blog']);
Route::get('blog_single',['as'=>'blog_signle','uses'=>'HomeController@blogSingle']);
Route::get('cart',['as'=>'cart','uses'=>'HomeController@cart']);
Route::get('/contact',['as'=>'contact','uses'=>'HomeController@contact']);
Route::get('/product',['as'=>'product','uses'=>'HomeController@product']);
Route::get('/regular',['as'=>'regular','uses'=>'HomeController@regular']);
Route::get('/shop',['as'=>'shop','uses'=>'HomeController@shop']);
