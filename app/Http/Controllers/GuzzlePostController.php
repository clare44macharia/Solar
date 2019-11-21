<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
//use GuzzleHttp\Pool;
use GuzzleHttp\Client;




class GuzzlePostController extends Controller
{
    public function display(){

        return view('predict');
    }

    public function postRequest(Request $request)
    {

        $payload =[
            "Cloud coverage" => $request['CloudCoverage'],
            "Visibility" => $request['Visibility'],
            "Temperature" => $request['Temperature'],
            "Dew point" => $request['DewPoint'],
            "Relative humidity" => $request['RelativeHumidity'],
            "Wind speed" => $request['WindSpeed'],
            "Station pressure" => $request['StationPressure'],
            "Altimeter" => $request['Altimeter'],

        ];
//        echo "start";
//dump($payload);
//echo "end";

        $client   = new Client();
        $headers = array('Content-Type' => 'application/json');

        $response = $client->post( 'https://solarpredictionapi.herokuapp.com/', [
            'json'    => $payload,
            'headers' => $headers

        ]);

        $body = $response->getBody()->getContents();
        $solar = json_decode($body,$assoc = true);
        dump($solar["prediction"]);

        return view('predict',compact($solar));


//        dump($body);
//        while (!$body->eof()) {
//            echo $body->read(1024);
//        }
//
//        dump($response);

//
//        $response = $client->post('https://solarpredictionapi.herokuapp.com/', [ 'body' => $payload,
//            'headers' => $headers
//        ]);

    }
}
