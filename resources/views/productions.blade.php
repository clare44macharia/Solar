
@extends('layouts.app')
@include('navBar')
{{--@extends('layouts.admin)--}}


@section('content')

    <div>

        <a xmlns="http://www.w3.org/1999/html">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>

    </div>

    <div class="col-md-16" >
        <br>
        <h3 align="center">Production</h3>
        <br/>


        <div class="row input-daterange">

            <label class="mb-7">From
            </label>
            <div class="col-md-4">
                <input type="text"  name="from_date" id="from_date" class="form-control" placeholder="From Date"  />
            </div>
            <label>
               To
            </label>
            <div class="col-md-4">
                <input type="date" name="to_date" id="to_date" class="form-control" placeholder="To Date" />
            </div>
            <div class="col-md-4">
                <button type="button" name="filter" id="filter" class="btn btn-primary" href="{{url('productions')}}">Filter</button>
                <button type="button" name="refresh" id="refresh" class="btn btn-default">Refresh</button>

                <a href="{{ url('export') }}" class="btn btn-outline-dark mb-12">Export Excel</a>
                <a href="{{ url('pdf') }}" class="btn btn-outline-dark mb-12">Export PDF</a>

            </div>

    </div>

    <br/>
    <br/>


    <div>

        <table class="table table table-bordered table-striped" width="200">
            <tr>
                <th>Id</th>
                <td>Altimeter Reading:</td>
                <td> Solar Energy</td>
                <td>Inverter Reading</td>
                <td>Year</td>
                <td>Month</td>
                <td>Day</td>
                <td>Date</td>

            </tr>

            @foreach($productions as $production)

                <tr>
                    <td>{{ $production->id }}</td>
                    <td>{{$production ->Altimeter}}</td>
                    <td>{{$production -> SolarEnergy}}</td>
                    <td>{{$production->InverterReading}}</td>
                    <td>{{$production->Year}}</td>
                    <td>{{$production -> Month}}</td>
                    <td>{{$production->Day}}</td>
                    <td>{{$production->Date}}</td>

                    <td><a href=""><button>Edit</button>&nbsp;&nbsp;<button>Delete</button></a></td>
                </tr>
            @endforeach

        </table>
    </div>


@endsection
