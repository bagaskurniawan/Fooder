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

Route::get('/','MyController@home');
Route::get('/home','MyController@home');
Route::get('/food','MyController@food');
Route::get('/promo','MyController@promo');
Route::get('/article','MyController@article');
Route::get('/about-us','MyController@about');
Route::get('/food-detail','MyController@foodDetail');
Route::get('/article-detail','MyController@articleDetail');