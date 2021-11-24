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
    return view('Home.layout.app');
});

Route::group(['middleware'=>'is_admin'],function(){
    Route::get('admin', function () {
    return view('Admin.index');
})->name('dashboard');

    Route::get('category', 'Admin\CategorysController@index')->name('auth.category');
});

Route::get('login', 'Admin\AuthController@index')->name('auth.login.get');
Route::post('login', 'Admin\AuthController@postLogin')->name('auth.login.post');
Route::get('logout', 'Admin\AuthController@logOut')->name('auth.logout.get');