@extends('layouts.app')
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
    <div class="login">
        <h1>Predict Solar Production</h1>


        <!-- Main Input For Receiving Query to our ML -->
        <form action="{{route('predict')}}"method="post">
            @csrf

            <input type="text" name="CloudCoverage" placeholder="Cloud coverage" required="required" />
            <input type="text" name="Visibility" placeholder="Visibility" required="required" />
            <input type="text" name="Temperature" placeholder="Temperature" required="required" />
            <input type="text" name="DewPoint" placeholder="Dew point" required="required" />
            <input type="text" name="RelativeHumidity" placeholder="Relative humidity" required="required" />
            <input type="text" name="WindSpeed" placeholder="Wind speed" required="required" />
            <input type="text" name="StationPressure" placeholder="Station pressure" required="required" />
            <input type="text" name="Altimeter" placeholder="Altimeter" required="required" />


            <button type="submit" class="btn btn-primary btn-block btn-large">Predict</button>
        </form>

        <br>
        <br>
{{--        {{ prediction_text }}--}}

    </div>


    </body>

@endsection
