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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


// Dashboard Controller

Route::get('/v1/dashboard', 'DashboardController@dashboard_index')->name('dashboard_index');

// Product
Route::get('/v1/dashboard/add/product','DashboardController@add_product')->name('add_product');
//END  Product

// CategoryController
Route::post('/v1/dashboard/add/product/create', 'CategoryController@create')->name('product_create');
// END CategoryController

// SubcategoryController
Route::post('/v1/dashboard/add/product/subcat_create', 'SubcategoryController@subcat_create')->name('subcat_create');
// END SubcategoryController

// BrandController
Route::post('/v1/dashboard/add/product/brand_create', 'BrandController@brand_create')->name('brand_create');
// END BrandController

// ProductController
Route::post('/v1/dashboard/add/product/insert', 'ProductController@product_insert')->name('product_insert');
// END ProductController

// END Dashboard Controller
