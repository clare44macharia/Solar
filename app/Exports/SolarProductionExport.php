<?php

namespace solar\Exports;

use solar\SolarProduction;
use Maatwebsite\Excel\Concerns\FromCollection;

class SolarProductionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SolarProduction::all();
    }
}
