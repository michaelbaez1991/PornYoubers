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


Route::get('categories', 'RedTubeApiController@categories')->name('category');
Route::get('searchBig', 'RedTubeApiController@searchAll')->name('searchG');
Route::get('searchTitle', 'RedTubeApiController@searchSpecificTitle')->name('searchT');
Route::get('searchTags', 'RedTubeApiController@searchSpecificTags')->name('searchE');
Route::get('searchStars', 'RedTubeApiController@searchSpecificStars')->name('searchS');
Route::get('searchThumbsize', 'RedTubeApiController@searchSpecificThumbsize')->name('searchST');

