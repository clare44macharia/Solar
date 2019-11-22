@extends('layouts.admin')
<div class="main-panel">

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Production</h4>
                    </div>
{{--                <div>--}}
{{--                    <a xmlns="http://www.w3.org/1999/html">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>--}}
{{--                </div>--}}

    {{--<div class="col-md-16" >--}}
    {{--    <br>--}}
    {{--    <h3 align="center">Production</h3>--}}
    {{--    <br/>--}}

    {{--    @if ($message =  \Illuminate\Support\Facades\Session::get('success'))--}}
    {{--        <div class="alert-success">--}}
    {{--            <p>{{$message}}</p>--}}
    {{--        </div>--}}
    {{--</div>--}}
    {{--@endif--}}

                    <div class="panel panel-default">
                        <a href="{{ url('export') }}" class="btn btn-outline-dark mb-2">Export Excel</a>
                        <a href="{{ url('pdf') }}" class="btn btn-outline-dark mb-2">Export PDF</a>
                        <div class="panel-heading">
                            <div class="row">

                                <div class="col-md-5"> Total Records - <b><span id="total_records"></span></b></div>
                                <div class="col-md-5">
                                    <div class="input-group input-daterange">
                                        <input type="text" name="from_date" id="from_date"  class="form-control" />
                                        <div class="input-group-addon">to</div>
                                        <input type="text"  name="to_date" id="to_date"  class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" name="filter" id="filter" class="btn btn-info btn-sm">Filter</button>
                                    <button type="button" name="refresh" id="refresh" class="btn btn-warning btn-sm">Refresh</button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
    {{--    <table class="table table table-bordered table-striped" width="200">--}}

                                    <th>Id</th>
                                    <td>Date</td>
                                    <td>Cloud Coverage</td>
                                    <td>Visibility</td>
                                    <td>Temperature</td>
                                    <td>Dew Point</td>
                                    <td>Relative humidity</td>
                                    <td>Wind Speed</td>
                                    <td>Station Pressure</td>
                                    <td>Altimeter</td>
                                    <td>Solar Energy</td>
                                </thead>


            @foreach($productions as $production)

                <tbody>
                    <tr>
                        <td>{{ $production->id }}</td>
                        <td>{{$production['Date']}}</td>
                        <td>{{$production['CloudCoverage']}}</td>
                        <td>{{$production['Visibility']}}</td>
                        <td>{{$production['Temperature']}}</td>
                        <td>{{$production ['Altimeter']}}</td>
                        <td>{{$production['RelativeHumidity']}}</td>
                        <td>{{$production['WindSpeed']}}</td>
                        <td>{{$production['StationPressure']}}</td>
                        <td>{{$production['Altimeter']}}</td>
                        <td>{{$production['SolarEnergy']}}</td>


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




