<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\model_nominatif;
use App\Exports\NominatifExport;
use App\Imports\NominatifImport;
use Maatwebsite\Excel\Facades\Excel;
class controller_nominatif extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {  
        return view('nominatif/nominatif');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $data=$request->except(['_token']);
        model_nominatif::insert($data);
      //return redirect('/nominatif')->with('success','Operation Successful !');
        // session()->flash('success','Operation Successful !');
    }

        public function update(Request $request, $id)
    {
        $item=model_nominatif::findorfail($id);
        $data=$request->except(['_token']);
        $item->update($data);
    }
    public function destroy(Request $request, $id)
    {
        $item=model_nominatif::findorfail($id);
        $item->delete();
    }


    public function getData(Request $req)
    {
        $responSql = model_nominatif::findorfail($req->dataId);
        $data['ikilodatane'] = $responSql;
        $data['judul'] = "SSS";
        return view('nominatif/nominatifFormEdit',$data);
    }
    public function listData(Request $req)
    {
        $data = model_nominatif::all();
        return view('nominatif.nominatif_list')->with([
            'data' => $data
        ]);
    }
    public function exportNominatif()
    {
        return Excel::download(new NominatifExport,'Nominatif_Pegawai.xlsx');
    }
    public function importNominatif(Request $request)
    {
        $file = $request->file('file');
        $namaFile=$file->getClientOriginalName();
        $file->move('DataPegawai',$namaFile);
        Excel::import(new NominatifImport,public_path('DataPegawai/'.$namaFile));
        return redirect ('nominatif');
    }

}
