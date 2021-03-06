<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', 'DashboardController@index')->name('admin')->middleware('admin');

Route::get('/index', function() {
    return view ('categories.index');
});
Route::resource('category', 'CategoryController');

Route::resource('product', 'ProductController');

Route::resource('promo', 'PromoController');

Route::get('/test21', function() {
    return view ('products.create');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['prefix'=>'admin','middleware'=>['admin','auth'],'namespace'=>'admin'],function() {

//     Route::get('dashboard', 'DashboardController@index')->name('dashboard');
// });

// Route::group(['prefix'=>'user','middleware'=>['mahasiswa','auth'],'namespace'=>'user'],function(){

//     Route::get('dashboard', 'UserDashboardController@index')->name('user.dashboard');

// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
