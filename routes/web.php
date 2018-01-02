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

//註冊
Route::group(['prefix' => 'register'], function() {

    Route::get('{val_id}', 'RegisterController@register_show'); //判斷註冊的身分

    Route::post('create_tenant', 'AuthController@register_create_tenant'); //註冊房客

    Route::post('create_landlord', 'AuthController@register_create_landlord'); //註冊房東
});

Route::get('/getmail/{user_id}',  'MailController@getmail');//收到使用者確認信件(並開通身分)

//登入入口
Route::get('login_entrance', 'LoginController@login_entrance_show');

//登入
Route::group(['prefix' => 'login'], function() {

    Route::get('{val_id}', 'LoginController@login_show'); //判斷登入的身分

});