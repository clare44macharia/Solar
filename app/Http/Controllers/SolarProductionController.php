<?php

namespace solar\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade as PDF;
use solar\Charts\ProductionChart;
use solar\Exports\SolarProductionExport;
use solar\SolarProduction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ConsoleTVs\Charts;


class SolarProductionController extends Controller
{
    public function display()
    {
        $productions = SolarProduction::all();
        return view('filter' ,  compact('productions'));

    }

    public function stats(){
        $avg_productions = DB::table('solar_productions')
            ->avg('SolarEnergy');
        return view('home' ,  compact('avg_productions'));

    }
    public function export()

    {
        $data['title'] = ' Solar Production Data';
        $data['productions'] =  SolarProduction::get();

        return Excel::download(new SolarProductionExport(), 'production.xlsx');

//        $pdf = Excel::loadView('notes.list_notes', $data);
//
//        return $pdf->download('tuts_notes.pdf');

     //   return Excel::download(new SolarProductionExport(), 'production.xlsx');

    }

    public function pdf()
    {
        $data['title'] = ' Solar Production Data';
        $data['productions'] = SolarProduction::get();

        $pdf = Excel::loadView('notes.list_notes', $data);

        return $pdf->download('tuts_notes.pdf');
    }



    public function download( $filename = '' )
    {
        // Check if file exists in app/storage/file folder
        $file_path = storage_path() . "/app/downloads/" . $filename;
        $headers = array(
            'Content-Type: csv',
            'Content-Disposition: attachment; filename='.$filename,
        );
        if ( file_exists( $file_path ) ) {
            // Send Download
            return \Response::download( $file_path, $filename, $headers );
        } else {
            // Error
            exit( 'Requested file does not exist on our server!' );
        }
    }


    public function predict()
    {

        return view('predict');
    }


    public function search(Request $request)
    {
        $productions = SolarProduction::search($request['search_item']->paginate(9));
        $searchflag = true;
        return view ('insertForm',compact('productions','searchflag'));
    }

    public function advancedSearch(Request $request){
        $keyword = $request['keyword'];
        $inverter = $request['inverter'];
        $Energy = $request['Energy'];
        $Altimeter = $request['Altimeter'];
        $month = $request['month'];
        $day = $request['day'];
        $year= $request['year'];

        $rawFilters = [
            'month => ' . $month,
            'day => '. $day,
            'year => ' . $year,
            'inverter => '.$inverter,
            'Energy => '.$Energy,
            'Altimeter =>'.$Altimeter,
        ];
        $queryFilters = array_filter($rawFilters);
        $filterString = implode('AND',$queryFilters);

        $params = [
            'optionalFilters' => $filterString
        ];

        $productions = SolarProduction::advancedSearch($keyword)->with($params);
        $searchFlag = true;

        return view('insertForm', compact('productions', 'searchFlag'));

    }
    public function chart()
    {

        $data = collect([]); // Could also be an array

        for ($days_backwards = 2; $days_backwards >= 0; $days_backwards--) {
            // Could also be an array_push if using an array rather than a collection.
            $data->push(SolarProduction::whereDate('created_at', today()->subDays($days_backwards))->count());
        }

        $chart = new ProductionChart;
        $chart->labels(['2 days ago', 'Yesterday', 'Today']);
        $chart->dataset('solar_productions', 'line', $data);

        return view('charts',compact('chart'));

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



    public function update($id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }




}
