@extends('layouts.admin')
{{--@extends('layouts.admin')--}}
@section('content')
    <head>
        <meta charset="UTF-8">
        <title>ML API</title>
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

    </head>

    <body>

        <div class="main-panel">


            <div class="content">

                <div class="login">
                    <p>Predict Solar Production</p>
                </div>

                <div class="form">

                   <form action="{{route('predict')}}"method="post">
                        @csrf

                        <div class="form row">
                            <input type="text" name="CloudCoverage" placeholder="Cloud coverage" required="required" />
                        </div>

                        <div class="form row">
                            <input type="text" name="Visibility" placeholder="Visibility" required="required" />
                        </div>

                       <div class="form row">
                            <input type="text" name="Temperature" placeholder="Temperature" required="required" />
                       </div>

                       <div class="form row">
                            <input type="text" name="DewPoint" placeholder="Dew point" required="required" />
                       </div>

                       <div class="form row">
                            <input type="text" name="RelativeHumidity" placeholder="Relative humidity" required="required" />
                       </div>

                       <div class="form row">
                            <input type="text" name="WindSpeed" placeholder="Wind speed" required="required" />
                       </div>

                       <div class="form row">
                            <input type="text" name="StationPressure" placeholder="Station pressure" required="required" />
                       </div>

                       <div class="form row">
                            <input type="text" name="Altimeter" placeholder="Altimeter" required="required" />
                       </div>

                       <div class="button">
                            <button type="submit" class="btn btn-primary btn-block btn-large">Predict</button>
                       </div>

                        </form>

                        <br>
                        <br>
                        {{--        {{ prediction_text }}--}}
                </div>
        </div>
        </div>
    </body>

@endsection
