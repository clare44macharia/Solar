@extends('layouts.admin')

<div class="main-panel">
    @include('layouts.header')

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Predictions</h4>
                    </div>


                    <div class="panel panel-default">
                        <a href="{{ url('export1') }}" class="btn btn-outline-dark mb-2">Export Excel</a>
                        <a href="{{ url('pdf') }}" class="btn btn-outline-dark mb-2">Export PDF</a>
                        <div class="panel-heading">

                        </div>

                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                {{--    <table class="table table table-bordered table-striped" width="200">--}}

                                <th>Id</th>
                                <td>Cloud Coverage</td>
                                <td>Visibility</td>
                                <td>Temperature</td>
                                <td>Dew Point</td>
                                <td>Relative humidity</td>
                                <td>Wind Speed</td>
                                <td>Station Pressure</td>
                                <td>Altimeter</td>
                                <td> Predicted Solar Energy</td>
                                <td>Date</td>
                                </thead>


                                @foreach($predictions as $production)

                                    <tbody>
                                    <tr>
                                        <td>{{ $production->id }}</td>
                                        <td>{{$production['CloudCoverage']}}</td>
                                        <td>{{$production['Visibility']}}</td>
                                        <td>{{$production['Temperature']}}</td>
                                        <td>{{$production ['DewPoint']}}</td>
                                        <td>{{$production['RelativeHumidity']}}</td>
                                        <td>{{$production['WindSpeed']}}</td>
                                        <td>{{$production['StationPressure']}}</td>
                                        <td>{{$production['Altimeter']}}</td>
                                        <td>{{$production['PredictedSolarEnergy']}}</td>
                                        <td>{{$production['created_at']}}</td>


                                    </tr>
                                    </tbody>


                                @endforeach

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




