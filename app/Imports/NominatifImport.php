<?php

namespace App\Imports;

use App\Models\model_nominatif;
use Maatwebsite\Excel\Concerns\ToModel;

class NominatifImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new model_nominatif([
           'nama'=>$row[1],
           'nip'=>$row[2],
           'jabatan'=>$row[3],
           'gol'=>$row[4],
           'alamat'=>$row[5],
           'no_hp'=>$row[6]
        ]);
    }
}
