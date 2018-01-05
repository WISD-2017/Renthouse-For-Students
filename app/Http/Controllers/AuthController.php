<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use View;
use Session;
use DB;


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
