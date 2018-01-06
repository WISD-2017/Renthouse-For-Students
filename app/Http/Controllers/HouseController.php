<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class HouseController extends Controller
{
    public function show($house_id)
    {
        $house_info = DB::table('houses')
            ->where('house_id', '=', $house_id)->get();
        Session::put('house_info', $house_info);
        $house_info = Session::get('house_info');
        Session::reflash();
        return view('house.lists')->with('house_info', $house_info);
        //return redirect('house/lists')->with('house_info', $house_info);
    }
}
