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
use App\Product;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/product','ProductController@viewproduct');
Route::get('/product/{id}','ProductController@found');
Route::get('add','ProductController@addProduct');
Route::post('add','ProductController@addProduct');
Route::get('add/{id}',function($id){
   $product=Product::find($id);
    $product->delete();
    return redirect('product'); 
});

Route::get('edit/{id}','ProductController@EditProduct');
Route::post('edit/{id}','ProductController@EditProduct');