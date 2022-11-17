<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model_sppdkadin;
use Barryvdh\DomPDF\Facade\Pdf;

class controller_sppdkadin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = model_sppdkadin::all();
        return view('Kadin_SPPD')->with([
            'data' => $data
        ]);
    }
    public function cetak($id)
    {
        $data=model_sppdkadin::findorfail($id);
        return view('Kadin_SPPD_Cetak')->with([
            'data' => $data
            ]);
        //     $pdf = Pdf::loadView('Kadin_SPPD_Cetak', [
        //         'data' => $data
        //         ]);
        // return $pdf->stream();
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
        model_sppdkadin::insert($data);
        return redirect('/kadinsppd')->with('message','Operation Successful !');
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