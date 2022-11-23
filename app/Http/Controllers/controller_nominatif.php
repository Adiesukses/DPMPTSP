<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\model_nominatif;

class controller_nominatif extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function Nominatif()
    {
        $data = model_nominatif::all();
        return view('nominatif/Nominatif')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tambahpeg(Request $request)
    {
        $data=$request->except(['_token']);
        model_nominatif::insert($data);
        return redirect('Nominatif')->with('message','Operation Successful !');
    }
    public function Nom_Edit($id)
    {
        $data=model_nominatif::findorfail($id);
        return view('Nom_Edit')->with([
            'data' => $data
            
            ]);
    }
        public function update(Request $request, $id)
    {
        $item=model_nominatif::findorfail($id);
        $data=$request->except(['_token']);
        $item->update($data);
        return redirect('Nominatif');
    }
    public function delete(Request $request, $id)
    {
        $item=model_nominatif::findorfail($id);
        $item->delete();
    }
   public function dashboard()
    {
        $data=model_nominatif::all()->count();
       return view('dashboard')->with([
        'data' => $data
    ]);
    }
    public function cc()
    {
        $data=model_nominatif::all()->count();
       return view('cc')->with([
        'data' => $data
    ]);
    }

    public function getData(Request $req)
    {
        $responSql = model_nominatif::findorfail($req->dataId);
        $data['ikilodatane'] = $responSql;
        $data['judul'] = "SSS";

        //print_r($data->nama);
        return view('nominatif/nominatif_modal',$data);
    }
    public function listData(Request $req)
    {
        $data = model_nominatif::all();
        return view('nominatif/nominatif_list')->with([
            'data' => $data
        ]);
    }
}
