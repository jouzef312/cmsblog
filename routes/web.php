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
   return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/admin','back\adminController');
Route::resource('/post','back\postController');
Route::resource('/categors','back\CategorsController');
Route::resource('/tag','back\TagController');

Route::resource('/permission','back\permissionController');
Route::resource('/role','back\roleController');


Route::resource('/article','front\articleController');



Route::get('/contact','front\contactController@create');
Route::post('/contact','front\contactController@store');



Route::get('/articlecategors/{id}','front\articleController@showarticle');
Route::get('/articletag/{id}','front\articleController@showtag');
