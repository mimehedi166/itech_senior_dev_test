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

Route::get('second-buyer-eloquent','BuyerController@findSecondBuyer');
Route::get('purchase-list-eloquent','BuyerController@findPurchaseList');
Route::get('record-transfer','BuyerController@recordTransfer');
Route::get('sort-js','BuyerController@sortJs');
Route::get('foreach-js','BuyerController@foreachJs');
Route::get('filter-js','BuyerController@filterJs');
Route::get('map-js','BuyerController@mapJs');
Route::get('reduce-js','BuyerController@reduceJs');
Route::get('i-m-funny','BuyerController@funnyRiddle');
Route::get('define-callback-js','BuyerController@defineCallback');
