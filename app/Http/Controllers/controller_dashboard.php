<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\model_nominatif;
use App\Models\model_dashboard;
use Carbon\Carbon;

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
    public function indexx()
    { 
                    //  $fdate=Carbon::createFromFormat('m/d/Y H:i:s', '12/01/2020 10:20:00');
                    // $dina=Carbon::createFromFormat('m/d/Y H:i:s', '12/01/2020 10:20:00');
                    // $interval= $$fdate->diff( $dina);
                    // $days=$interval->format('%a') + 1;
                    // echo $days;


                    $firstDate = Carbon::parse('today');
                    $secondDate = Carbon::parse('2022-12-26');
                    
                    // using gte()
                    if ($firstDate->gte($secondDate)) { 
                        dd($firstDate . ' is lebih besar ' . $secondDate);
                    } else {
                        dd($firstDate . ' is not greater than or equal to ' . $secondDate);
                    }
    }



}
