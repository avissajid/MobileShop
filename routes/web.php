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





Route::get('/AddCategory', function () {
    return view('AddCategory');
});

Route::get('/AddBrand', function () {
    return view('AddBrand');
});


Route::get('/AddModel', function () {
    

    return view('AddModel');
});

Route::get('/addproduct', function () {
    

    return view('AddProduct');
});


Route::get('/home', function () {
    return view('layouts.home');
});




Route::get('/check', function () {
    return view('check');
});


Route::get('/main/{id}', 'HomeController@showProductsWithCategory');


Route::post('/AddCategory','HomeController@addcategory');

Route::post('/AddBrand','HomeController@addbrand');

Route::post('/addmodel','HomeController@addmodel');

Route::get('/show','HomeController@show');






Route::get('cart','CartController@index');


Route::get('total',function(){

      return  Cart::total();
});



Route::get('cart/remove/{id}','CartController@removeitem');

Route::get('cart/{id}','CartController@additem');

Route::get('remove',function(){
                 $rowId = '0f6524cc3c576d484150599b3682251c';

                Cart::remove($rowId);
});

Route::get('next/{id}', 'HomeController@next')->name('next');
Route::get('ShopingCart',function(){
      
      return view('Shopping_Cart');

});


Route::get('/kash',function(){
      
      return view('master');

});

Route::get('/insert',function(){
      
      return view('insert');

});

// 	return view('message');
// });
Route::get('/getSubCategory/', 'HomeController@index');

Route::get('/getmodel/', 'HomeController@model');

Route::post('/addproduct','HomeController@addproduct');
Route::post('/insert', 'HomeController@File');



Route::match(['put','patch'],'/cart/{cart}','CartController@update')->name('update');