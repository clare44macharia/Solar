<?php

namespace App\Http\Controllers;

use App\Exports\SolarPredictionExport;
use App\SolarPredictions;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SolarPredictionController extends Controller
{

    public function index()
    {
        $predictions = SolarPredictions::all();
        return view("insights",compact('predictions'));
    }

    public function export()

    {
        $data['title'] = ' Solar Predictions Data';
        $data['productions'] = SolarPredictions::all();

        return Excel::download(new SolarPredictionExport(), 'insights.xlsx');

    }


}
