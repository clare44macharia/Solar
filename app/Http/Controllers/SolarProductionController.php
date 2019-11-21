<?php

namespace App\Http\Controllers;

use App\Charts\UserChart;
use App\Exports\SolarProductionExport;
use App\SolarProduction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use Khill\Lavacharts\Charts\DonutChart;
use Maatwebsite\Excel\Facades\Excel;
use Khill\Lavacharts\Lavacharts;
//use Khill\Lavacharts\Laravel\LavachartsFacade as Lava;




class SolarProductionController extends Controller
{
    public function display()
    {
        $productions = SolarProduction::all();
        return view('filter', compact('productions'));

    }

    public function stats($id)
    {
        $showMax = SolarProduction::where('id', $id)->count();
        return view('home', compact('showMax'));
//        $avg_productions = DB::table('solar_productions')
//            ->avg('SolarEnergy');
//        return view('home' ,  compact('avg_productions'));

    }

    public function export()

    {
        $data['title'] = ' Solar Production Data';
        $data['productions'] = SolarProduction::all();

        return Excel::download(new SolarProductionExport(), 'production.xlsx');

    }

    public function pdf()
    {
        $data['title'] = ' Solar Production Data';
        $data['productions'] = SolarProduction::all();

        return Excel::download(new SolarProductionExport(), 'production.pdf');


    }


    public function predict()
    {

        return view('predict');
    }


    public function search(Request $request)
    {
        $productions = SolarProduction::search($request['search_item']->paginate(9));
        $searchflag = true;
        return view('insertForm', compact('productions', 'searchflag'));
    }

    public function displayChart()
    {

        $usersChart = new UserChart;
        $usersChart->labels(['Jan', 'Feb', 'Mar']);
        $usersChart->dataset('Users by trimester', 'line', [10, 25, 13]);
        return view('visualize',compact('usersChart'));
    }




//        $lava = new Lavacharts;
//
//        $solar = \Lava::DataTable();
//
//        $solar_energy = SolarProduction::all()->count();
//
//        $solar->addStringColumn('Solar Production')
//            ->addNuberColumn('Total')
//            ->addRow(['Solar', $solar_energy])
//            ->addRow(['Non Solar, 2']);
//
//        \Lava::DonutChart('IMDB', $solar_energy, [
//            'title' => 'Solar productions Totals'
//        ]);

//        self::chart($lava);
//
//        return view('home',compact('lava'));
//        return view('charts');




    public function chart()

    {

        $result = DB::table('solar_productions')
            ->where('SolarEnergy','>=','20000')
            ->orderBy('Date', 'ASC')
            ->get();
        return response()->json($result);

//        $lava = new Lavacharts();
//       $trends = $lava->DataTable();
//       $data = SolarProduction::select('SolarEnergy','Date')->get()->toArray();
//
//       foreach ($data as $key => $value){
//           $trends->addRow([$value['SolarEnergy'],$value['Date'],]);
//       }
//
//       $lava->AreaChart('trends',$trends,
//              ['title' =>'Production tends',
//              'legend' => [
//                  'position' => 'in'
//           ]
//           ]);


    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            if($request->from_date != '' && $request->to_date != '')
            {
                $data = DB::table('solar_productions')
                    ->whereBetween('Date', array($request->from_date, $request->to_date))
                    ->get();
            }
            else
            {
                $data = DB::table('solar_productions')->orderBy('Date', 'desc')->get();
            }
            echo json_encode($data);
        }
    }



}
