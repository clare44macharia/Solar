@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        ...
        {{-- ChartScript --}}
        @if($usersChart)
            {!! $usersChart->script() !!}
        @endif
    </head>

    <h1>Sales Graphs</h1>

    <div style="width: 50%">
        {!! $salesChart->container() !!}
    </div>
@endsection



























































{{--@extends('layouts.admin')--}}

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <!doctype html>--}}
{{--<html lang="{{ config('app.locale') }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    ...--}}
{{--    --}}{{-- ChartScript --}}

{{--    <meta charset="utf-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <title>Laravel</title>--}}

{{--    <!-- Fonts -->--}}
{{--    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">--}}
{{--    <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">--}}
{{--</head>--}}
{{--<body>--}}
{{--     <div class="main-panel">--}}
{{--        <div class="content">--}}
{{--            <br />--}}
{{--            <div class="card-chart">--}}
{{--               Reports--}}
{{--            </div>--}}

{{--                <h1>Sales Graphs</h1>--}}

{{--                <div style="width: 50%">--}}
{{--                    <script>--}}

{{--                        @if($usersChart)--}}
{{--                            {!! $usersChart->script() !!}--}}
{{--                        @endif--}}
{{--                    </script>--}}
{{--                    {!! $usersChart->container() !!}--}}
{{--                </div>--}}


{{--            <div class="card-body " id="home">--}}
{{--                <a href="{{route('visualize/chart')}}">--}}

{{--            </div>--}}

{{--        </div>--}}
{{--     </div>--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>--}}
{{--</body>--}}
{{--</html>--}}

{{--@endsection--}}
