<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public static function register_entrance_show(){ //註冊入口(身分選擇)
        return view('register_entrance');
    }
}
