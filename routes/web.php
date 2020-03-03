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
use App\Category;

Route::get('/', function () {

    // $prod = new Product();

    // $prod->name = 'Product 4';
    // $prod->slug = 'Product 4';
    // $prod->category_id = 2;
    // $prod->short_description = 'Product 4';
    // $prod->description = 'Product 4';
    // $prod->product_specifications = 'Product 4';
    // $prod->data_of_interest = 'Product 4';
    // $prod->state ='New';
    // $prod->active = 'y';
    // $prod->slider = 'y';

    // $prod->save();

    // return $prod;

   return view('store.index');
//    $prod =Product::find(1)->first();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
