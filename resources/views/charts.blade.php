@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Chart Demo</div>

                    <div class="panel-body">
                        {!! $chart->html() !!}
                    </div>

                    <hr>
                    {!!$pie->html() !!}
                </div>
            </div>
        </div>
    </div>
    {!!\ConsoleTVs\Charts\Classes\Chartjs\Chart::scripts() !!}
    {!! $chart->script() !!}

    {!! $pie->script() !!}

@endsection



{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <!-- Stock.blade.php -->--}}

{{--    <!doctype html>--}}
{{--    <html lang="{{ config('app.locale') }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>Laravel</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">--}}
{{--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">--}}
{{--    </head>--}}
{{--    <body>--}}
{{--    <div class="container">--}}
{{--        <br />--}}
{{--        <form action="{{url('stock/add')}}" method="post">--}}
{{--            {{csrf_field()}}--}}
{{--            <div class="form-group">--}}
{{--                <label for="stockName">Solar Energy:</label>--}}
{{--                <input type="text" class="form-control" id="stockName" name="stockName">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="stockPrice">Inverter Readings:</label>--}}
{{--                <input type="text" class="form-control" id="stockPrice" name="stockPrice">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="stockPrice">Year:</label>--}}
{{--                <select class="selectpicker" name="stockYear">--}}
{{--                    <option value="1991">1991</option>--}}
{{--                    <option value="1992">1992</option>--}}
{{--                    <option value="1993">1993</option>--}}
{{--                    <option value="1994">1994</option>--}}
{{--                    <option value="1995">1995</option>--}}
{{--                    <option value="1996">1996</option>--}}
{{--                </select>--}}
{{--            </div>--}}
{{--            <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>--}}
{{--    </body>--}}
{{--    </html>--}}
{{--    @endsection--}}
