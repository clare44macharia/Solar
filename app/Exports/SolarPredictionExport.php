<?php

namespace App\Exports;

use App\SolarPredictions;
use Maatwebsite\Excel\Concerns\FromCollection;

class SolarPredictionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SolarPredictions::all();
    }
}
