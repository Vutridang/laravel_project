<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::get('store', 'ProductController@debug');

Route::get('index', 'ProductController@index');

Route::get('show/{id}', 'ProductController@show');


//create form
Route::get('products/create', 'ProductController@create');
//create form submit
Route::post('products/store', 'ProductController@store')->name("product-store");

Route::get('home', function () {
    return view('home');
});

//update form
Route::post('products/update', 'ProductController@update')->name("product-update");

//show form
Route::get('products/show/{id}', 'ProductController@show')->name("product-show");

//delete product 
Route::get('products/delete/{id}', 'ProductController@delete')->name("product-delete");
