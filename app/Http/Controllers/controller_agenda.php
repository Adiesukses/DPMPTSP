<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model_agenda;
class controller_agenda extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = model_agenda::all();
        return view('agenda/agenda')-> with([
            'data' => $data
        ]);
    }
    public function listData(Request $req)
    {
        $data = model_agenda::all();
        return view('agenda/agendaTabel')->with([
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
        model_agenda::insert($data);
        // return redirect('/agenda')->with('message','Operation Successful !');
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
        $item=model_agenda::findorfail($id);
        $data=$request->except(['_token']);
        $item->update($data);
    }
    public function getData(Request $req)
    {
        $responSql = model_agenda::findorfail($req->dataId);
        $data['ikilodatane'] = $responSql;
        $data['judul'] = "SSS";

        //print_r($data->nama);
        return view('agenda/agendaFormEdit',$data);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $item=model_agenda::findorfail($id);
        $item->delete();
    }
}
