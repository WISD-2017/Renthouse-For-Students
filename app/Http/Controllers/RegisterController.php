<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public static function register_entrance_show(){ //註冊入口(身分選擇)
        return view('register_entrance');
    }

    public static function register_show($val_id){ //顯示註冊頁面(依身分顯示不同註冊須知)
        return view('register' ,compact('val_id'));
    }
}
