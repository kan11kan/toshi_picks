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


Route::get('tests/test','TestController@index');

Route::get('tests/memo','MemoController@index');

Route::get('tests/show','MemoController@show');




Route::group(['prefix'=>'memos','middleware'=>'auth'],function(){
    Route::get('index','MemoFormController@index')->name('memos.index');
    Route::get('create','MemoFormController@create')->name('memos.create');
    Route::post('store','MemoFormController@store')->name('memos.store');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
