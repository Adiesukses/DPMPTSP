<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model_nominatif;
use App\Models\model_dashboard;


class controller_dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=model_nominatif::all()->count();
        $data1=model_dashboard::all()->sortBy('tanggal');
       return view('dashboard/dashboard')->with([
        'data' => $data,
        'data1'=>$data1

    ]);
    }
    public function index2()
    {
        $data=model_dashboard::all()->sortBy('tanggal');
        return view('dashboard/dashboard_user')->with([
         'data' => $data
        ]); 
    }
    public function listData(Request $req)
    {
        $data = model_dashboard::all()->sortBy('tanggal');
        return view('dashboard/kegList')->with([
            'data' => $data
        ]);
    }
    public function listData2(Request $req)
    {
        $data = model_dashboard::all()->sortBy('tanggal');
        return view('dashboard/kegList2')->with([
            'data' => $data
        ]);
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
        $data=$request->except(['_token']);
        model_dashboard::insert($data);
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
        $item=model_dashboard::findorfail($id);
        $item->delete();
    }




}
