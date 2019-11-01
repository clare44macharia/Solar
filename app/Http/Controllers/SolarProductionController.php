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

    public function pdf(){

        // Fetch all customers from database
        $data = SolarProduction::all();
        // Send data to the view using loadView function of PDF facade
        $pdf = PDF::loadView('insertForm', $data);
        // If you want to store the generated pdf to the server then you can use the store function
        $pdf->save(storage_path().'_filename.pdf');
        // Finally, you can download the file using download function
        return $pdf->download('customers.pdf');
    }

    public function display()
    {

        $productions = SolarProduction::all();
        return view('filter' ,  compact('productions'));


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
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function predict()
    {

        return view('predict');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
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
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
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



    /**
     * Show the form for editing the specified resoure.
     *
     * @param  int  $id
     * @return Response
     */





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


//        $keyword = $request['keyword'];
//        $productions= DB::table('solar_productions')
//            ->where('created_at',$keyword)
//            ->get();
//
//        return view('productions',compact('productions'));





    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }




}
