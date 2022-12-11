<?php

namespace App\Exports;

use App\Models\model_nominatif;
use Maatwebsite\Excel\Concerns\FromCollection;

class NominatifExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return model_nominatif::all();
    }
}
