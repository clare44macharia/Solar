<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
{{--    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('../assets/img/apple-icon.png') }}">--}}

{{--    <link rel="" type="image/png" href="{{ asset('../assets/img/apple-icon.png') }}">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />--}}
    <title>
        PvSolarMonitor
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href=" {{ asset('../assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{asset('../assets/css/paper-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    {{--    <link href="{{asset('../assets/demo/demo.css" rel="stylesheet')}}" />--}}
</head>

<body>

<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
{{--            <a href="http://www.creative-tim.com" class="simple-text logo-mini">--}}
{{--                <div class="logo-image-small">--}}

{{--                    <img src="{{asset('../assets/img/logo-small.png')}}" alt="">--}}
{{--                </div>--}}
{{--            </a>--}}
            {{--            <a href="http://www.creative-tim.com" class="simple-text logo-normal">--}}


            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                @if (auth()->user()->image)
                    <img src="{{ asset(auth()->user()->image) }}" style="width: 40px; height: 40px; border-radius: 50%;">
                @endif
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
{{--            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--            </a>--}}


            <!-- <div class="logo-image-big">
              <img src="../assets/img/logo-big.png">
            </div> -->
            {{--            </a>--}}
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active ">



                    <a href="{{route('home')}}">
                        <i class="nc-icon nc-bank"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href= "{{route('filter')}}">
                        <i class="nc-icon nc-diamond"></i>
                        <p>Production</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('visualize')}}">
                        <i class="nc-chart-bar-32"></i>
                        <p>Visualize</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('predict')}}">
                        <i class="nc-icon nc-bell-55"></i>
                        <p>Predict</p>
                    </a>
                </li>

                <li>
                    <a href="{{route('insights')}}">
                    <i class="nc-icon nc-tile-56"></i>
                                        <p>Predictions</p>
                    </a>
                </li>

                <li>
                    <a href="{{route('profile')}}">
                        <i class="nc-icon nc-single-02"></i>
                        <p>User Profile</p>
                    </a>
                </li>
{{--                                <li>--}}
{{--                                    <a href="./typography.html">--}}
{{--                                        <i class="nc-icon nc-caps-small"></i>--}}
{{--                                        <p>Typography</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
                {{--                <li class="active-pro">--}}
                {{--                    <a href="./upgrade.html">--}}
                {{--                        <i class="nc-icon nc-spaceship"></i>--}}
                {{--                        <p>Upgrade to PRO</p>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
            </ul>
        </div>
    </div>



    @yield('content')


</div>

{{--@include('partials.footer')--}}
{{--</div>--}}
<!--   Core JS Files   -->
</body>

</html>
