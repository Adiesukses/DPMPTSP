<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model_upload;
class controller_upload extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = model_upload::all();
        return view('dokumen/dokumen')-> with([
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
        $nn=$request->filex;
        $namaFile=$nn->getClientOriginalName();
        $dtUpload=new model_upload;
        $dtUpload->tahun=$request->tahun;
        $dtUpload->nama=$request->nama;
        $dtUpload->jenis=$request->jenis;
        $dtUpload->filex=$namaFile;
        $nn->move(public_path().'/dokumen',$namaFile);
        $dtUpload->save();
        return redirect('dok');
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
