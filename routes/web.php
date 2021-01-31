<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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
    Alert::success('Success Title', 'Welcome');

    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
    Route::get('product/overdue', 'ProductController@overdue');
    Route::patch('/restock/{products}', 'ProductController@restoch');

    Route::post('/restock/update/{id}', 'ProductController@restoch')->name('restoch.search');




    Route::get('admin/delete_product/{id}', 'ProductController@deleteproduct');

    Route::resource('categories', 'CategoryController');
    Route::resource('brands', 'BrandController');
     Route::resource('invoice', 'InvoiceController');
    Route::resource('suppliers', 'SupplierController');
     // Route::get('/', 'ProductsController@index');
Route::get('carts', 'CartController@cart');
Route::post('add-to-cart/{id}', 'CartController@addToCart');
Route::get('/cart','CartController@indexcart');
Route::resource('carts', 'CartController');
Route::get('/load-cart-data','CartController@cartloadbyajax');
Route::post('update-to-cart','CartController@updatetocart');
Route::delete('delete-from-cart','CartController@deletefromcart');


Route::get('checkout','CheckoutController@index');

Route::post('place_order', 'CheckoutController@storeorder');
Route::get('generate-invoice/{id}','InvoiceController@invoice');



Route::patch('update-cart', 'CartController@update');
Route::delete('remove-from-cart', 'CartController@remove');
Route::resource('sales', 'CartController');
Route::resource('allsale', 'SalesController');


Route::get('report', 'ReportController@index');

Route::post('report/pdf', 'ReportController@exportPDF')->name('report.pdf');
// Route::post('report/search', 'ReportController@search')->name('report.search');
Route::get('report/search/{id}','ReportController@getRecord')->name('sales.search');




    // Route::post('add-to-cart','CartController@addtocart');

});







