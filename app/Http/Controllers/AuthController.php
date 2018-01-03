<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Redirect;
use View;
use Session;
use DB;
use Illuminate\Support\Facades\Mail;
class AuthController extends Controller
{
    public function show()
    {
        return view ('/index');
    }

    public function register_create_tenant(Request  $request) //註冊房客
    {
        $account = $request->account;

        User::create([
            'account'=>$account,
            'password'=>$request->password,
            'name'=>$request->name,
            'email'=>$request->email,
            'verify'=>'0',
            'level'=>'1',
            'withdrawal'=>'0'

        ]);

        $user = DB::table('users')
            ->where('account', '=', $account)->get();

        foreach( $user as $data) {
            $user_id = $data->user_id;
        }

        Mail::raw('http://localhost:8000/getmail/'.$user_id, function ($message) use ($user){
            foreach( $user as $data){
                $message->to($data->email, $data->name)->subject('註冊租屋網會員通知');
            }
        });

        return redirect('index')->with('WaitForMail','請確認信件')->with('user_data',$user);
    }

    public function register_create_landlord(Request  $request) //註冊房東
    {
        $account = $request->account;

        User::create([
            'account'=>$account,
            'password'=>$request->password,
            'name'=>$request->name,
            'email'=>$request->email,
            'verify'=>'1',
            'level'=>'2',
            'withdrawal'=>'0'

        ]);

        return redirect('index')->with('landlord_msg','房東註冊成功');
    }

    public function login(Request  $request)
    {
        $account = $request->account;
        $password = $request->password;

        $login=DB::table('users')->where('account',$account)->where( 'password', $password)->where( 'verify', 1) ->where('level', 1)->get();

        if(count($login)>0 ) {
            Session::put('login', $login);
            $login = Session::get('login');
            Session::reflash();

            return redirect('index')->with('login', $login);

        }else{

            return redirect(url()->previous().'/error');
        }

    }
}
