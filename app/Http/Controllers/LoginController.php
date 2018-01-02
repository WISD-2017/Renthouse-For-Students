<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public static function login_entrance_show(){ //登入入口(身分選擇)
        return view('login_entrance');
    }
}
