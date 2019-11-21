<?php

namespace App\Http\Controllers;

use App\SolarProduction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $showAvgs = DB::table('solar_productions')
            ->avg('SolarEnergy');
        $showAvgs1 =  round($showAvgs);
        $showMax = DB::table('solar_productions')
            ->max('SolarEnergy');
        $showMin = DB::table('solar_productions')
            ->min('SolarEnergy');
        $showCounts = DB::table('solar_productions')
            ->count('SolarEnergy');
        return view('home',compact('showAvgs1','showMax','showMin','showCounts'));

    }


    public function visualize(){
        return view ('visualize');
    }

}
