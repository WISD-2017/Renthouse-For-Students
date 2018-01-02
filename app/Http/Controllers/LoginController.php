<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public static function login_entrance_show(){ //登入入口(身分選擇)
        return view('login_entrance');
    }

    public static function login_show($val_id){
        return view('login' ,compact('val_id')); //顯示登入頁面
    }
}
