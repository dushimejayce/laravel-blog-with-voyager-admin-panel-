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

Route::get('/','blogController@index');
Route::get('post/{slug}','blogController@show')->name('post.show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
