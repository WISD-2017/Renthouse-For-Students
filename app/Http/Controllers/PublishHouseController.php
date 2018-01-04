<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class PublishHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_step1() //刊登房屋(step1 - 填寫房東資料) -View
    {
        return view ('publish.publish_landlord_info');
    }

    public function index_step2() //刊登房屋(step2 - 填寫房屋詳細資訊) -View
    {
        return view ('publish.publish_house_info');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function store_landlord_info(Request $request) //建立房東資料(step1)
    {
        Session::reflash();
        $request->session()->put('contact', $request->contact);
        $request->session()->put('relationship', $request->relationship);
        $request->session()->put('phone', $request->phone);

        $landlord_info_data = $request->session()->all();

        return redirect('publish/publish_house_info')->with('landlord_info_data', $landlord_info_data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
