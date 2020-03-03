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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/books','BookController@index');
Route::post('/books','BookController@store')->name('books');
Route::get('books/create','BookController@create')->name('book.create');

Route::get('/customers','CustomerController@index')->name('customer.index');
Route::post('/customers','CustomerController@store')->name('customers');
Route::get('/customers/create','CustomerController@create')->name('customer.create');

Route::get('/orders','OrderController@index');
Route::post('orders','OrderController@store');
Route::get('/orders/create','OrderController@create')->name('order.create');
