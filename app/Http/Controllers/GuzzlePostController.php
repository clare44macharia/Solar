<?php

namespace App\Http\Controllers;


use App\SolarPredictions;
use Illuminate\Http\Request;
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

        $solar = $this->getPrediction($payload);

        $solarPrediction = new SolarPredictions();
        $solarPrediction -> CloudCoverage = request('CloudCoverage');
        $solarPrediction -> Visibility = request('Visibility');
        $solarPrediction -> Temperature = request('Temperature');
        $solarPrediction -> DewPoint = request('DewPoint');
        $solarPrediction -> RelativeHumidity = request('RelativeHumidity');
        $solarPrediction -> WindSpeed = request('WindSpeed');
        $solarPrediction -> StationPressure = request('StationPressure');
        $solarPrediction -> Altimeter = request('Altimeter');
        $solarPrediction -> PredictedSolarEnergy = $solar['prediction'];
        $solarPrediction ->save();


        return view('predict')->with('solar', $solar["prediction"]);


    }
    public function getPrediction($payload){
        $client   = new Client();
        $headers = array('Content-Type' => 'application/json');

        $response = $client->post( 'https://solarpredictionapi.herokuapp.com/', [
            'json'    => $payload,
            'headers' => $headers

        ]);

        $body = $response->getBody()->getContents();
        $solar = json_decode($body,$assoc = true);

        return $solar;
    }


}
