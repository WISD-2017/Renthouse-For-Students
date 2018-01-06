<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{
    public function show()
    {
        $houses = DB::table('houses')->orderBy('house_id', 'desc')->get();
        if(count($houses)>0 ) {
            Session::put('houses', $houses);
            $houses = Session::get('houses');
            Session::reflash();
        }
        return view ('/index')->with('houses', $houses);
    }

    public function logout()
    {
        Session::flush();
        return Redirect::to('index');
    }
}
