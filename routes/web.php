<?php

use App\Http\Controllers\CartController;
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
    return view('front_end.index');
})->name('home');
//Product
Route::resource('products', 'ProductController');

Route::resource('typeproducts', 'TypeproductController');
Route::resource('brands', 'BrandController');
Route::resource('groupproducts', 'GroupProductController');
Auth::routes();
Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/promotions', 'ProductController@showpromotion');
Route::get('/b', 'ProductController@showhotproduct');
Route::get('/newproducts', 'ProductController@showNewProducts');
Route::get('/product/{product}', 'ProductController@hotproduct')->name('product.hot');
Route::get('/deletedproducts', 'ProductController@showdeletedproducts')->name('product.trash');
Route::post('/deletedproducts/restore/', 'ProductController@restoreDelete')->name('restoreProduct');
Route::get('/groupproductsdetail/{id}', 'ProductController@showproductweb')->name('showdetail');
Route::get('/typeproductdetail/{id}', 'ProductController@showproductweb')->name('showdetail');
Route::get('/contact', 'ProductController@contact')->name('contact');

//Orderdetail
Route::resource('orderdetails', 'OrderdetailController');
Route::get('/orderdetail/{orderdetail}', 'OrderdetailController@status')->name('orderdetail.status');

//Order
Route::resource('orders', 'OrderController');
Route::get('/order/{order}', 'OrderController@status')->name('order.status');

//Customer
Route::resource('customers', 'CustomerController');

//Blog
Route::resource('blogs', 'BlogController');
Route::get('showdetailblog/{id}', 'BlogController@showdetailblog')->name('showdetailblog');
Route::get('listblog', 'BlogController@listblog')->name('listblog');

//Search
Route::get('productssearch', 'ProductController@search')->name('search');
//Admin manager
Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::get('/errors', 'AdminController@error404')->name('error404');
Route::get('/blank', 'AdminController@blank')->name('blank');
Route::get('/button', 'AdminController@button')->name('button');
Route::get('/card', 'AdminController@card')->name('card');
Route::get('/chart', 'AdminController@chart')->name('chart');
Route::get('/table', 'AdminController@table')->name('table');
Route::get('/forgot-password', 'AdminController@forgotpassword')->name('forgotpassword');
// Route::get('/login', 'AdminController@loginadmin')->name('loginadmin');
Route::get('/signup', 'AdminController@register')->name('signup');
Route::get('/animation', 'AdminController@animation')->name('animation');
Route::get('/border', 'AdminController@border')->name('border');
Route::get('/color', 'AdminController@color')->name('color');
Route::get('/orther', 'AdminController@orther')->name('orther');

//Logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Cart
Route::post('/cart-add', 'CartController@add')->name('cart.add');
Route::get('/cart-checkout', 'CartController@cart')->name('cart.checkout');
Route::post('/cart-clear', 'CartController@clear')->name('cart.clear');
Route::post('/cart-update', 'CartController@update')->name('cart.update');
Route::get('/cart-view', 'CartController@view')->name('cart.view');
Route::post('/cart-remove', 'CartController@remove')->name('cart.remove');

Route::post('/checkout', 'CartController@checkout')->name('cart.check');
