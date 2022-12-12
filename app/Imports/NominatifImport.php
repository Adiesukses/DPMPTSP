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
            //
        ]);
    }
}
