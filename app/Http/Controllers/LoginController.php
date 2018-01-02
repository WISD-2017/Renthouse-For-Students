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

    public static function login_one_error($val_id){
        $error = '帳號密碼錯誤，或者身分尚未審核成功！';
        return view('login' ,compact('val_id','error')); //輸入帳密錯誤(以輸入1次)
    }
    public static function login_two_error($val_id){
        $error = '帳號密碼錯誤，或者身分尚未審核成功，剩2次機會';
        return view('login' ,compact('val_id','error')); //輸入帳密錯誤(以輸入2次)
    }
    public static function login_three_error($val_id){

        $error ='帳號密碼錯誤，或者身分尚未審核成功，剩最後1次機會';
        return view('login' ,compact('val_id','error')); //輸入帳密錯誤(以輸入3次)
    }

    public static function login_over_three_error($val_id){
        $over_three_error = '超過三次錯誤！'.'是否尚未註冊成功？或者忘記密碼？';
        return view('index' ,compact('val_id','over_three_error')); //輸入帳密錯誤>3 ， 跳至首頁(後續須補->)
    }
}
