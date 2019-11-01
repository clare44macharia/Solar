<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('../assets/img/apple-icon.png') }}">

    <link rel="" type="image/png" href="{{ asset('../assets/img/apple-icon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
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
    <link href="{{asset('../assets/demo/demo.css" rel="stylesheet')}}" />
</head>

<body>

<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                <div class="logo-image-small">

                    <img src="{{asset('../assets/img/logo-small.png')}}" alt="">
                </div>
            </a>
{{--            <a href="http://www.creative-tim.com" class="simple-text logo-normal">--}}

                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>


                <!-- <div class="logo-image-big">
                  <img src="../assets/img/logo-big.png">
                </div> -->
{{--            </a>--}}
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active ">



                    <a href="{{route('insertForm')}}">
                        <i class="nc-icon nc-bank"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="./icons.html">
                        <i class="nc-icon nc-diamond"></i>
                        <p>Monitor</p>
                    </a>
                </li>
                <li>
                    <a href="./map.html">
                        <i class="nc-icon nc-pin-3"></i>
                        <p>Visualize</p>
                    </a>
                </li>
                <li>
                    <a href="./notifications.html">
                        <i class="nc-icon nc-bell-55"></i>
                        <p>Analyze</p>
                    </a>
                </li>
                <li>
                    <a href="./user.html">
                        <i class="nc-icon nc-single-02"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
{{--                    <a href="./tables.html">--}}
{{--                        <i class="nc-icon nc-tile-56"></i>--}}
{{--                        <p>Table List</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="./typography.html">--}}
{{--                        <i class="nc-icon nc-caps-small"></i>--}}
{{--                        <p>Typography</p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="active-pro">--}}
{{--                    <a href="./upgrade.html">--}}
{{--                        <i class="nc-icon nc-spaceship"></i>--}}
{{--                        <p>Upgrade to PRO</p>--}}
{{--                    </a>--}}
                </li>
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
