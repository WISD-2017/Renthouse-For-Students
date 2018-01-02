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

//首頁
Route::get('index', ['as' => 'index', 'uses' => 'AuthController@show'])->name('index');

//註冊入口
Route::get('register_entrance', 'RegisterController@register_entrance_show');