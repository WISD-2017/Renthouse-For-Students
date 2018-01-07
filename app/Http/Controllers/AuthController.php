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
        $houses = DB::table('houses')->orderBy('house_id', 'desc')->Paginate(3);
        return view ('index',['houses' => $houses]);
    }

    public function logout()
    {
        Session::flush();
        return Redirect::to('index');
    }
}
