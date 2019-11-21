@extends('layouts.admin')


@section('content')


    <div class="main-panel" xmlns:position="http://www.w3.org/1999/xhtml">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <div class="col-5 pl-5 ">
                        <image src="{{asset('../assets/img/logo.png')}}" width = "40" height = "40" class="rounded-circle"></image>
                    </div>
                    <a class="navbar-brand" href="#pablo"><strong>PVSolarMonitor</strong></a>
                </div>

                <div class="collapse navbar-collapse justify-content-end" id="navigation">

                    {{--                   Simple Search --}}

                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="nc-icon nc-zoom-split"></i>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </div>

                </div>
            </div>
        </nav>


    </div> -->
    <div class="table-production" >
        {{--            <div class="row">--}}
        {{--                <div class="col-25">--}}

        {{--display username--}}
        {{--            <div>--}}
        {{--                <a xmlns="http://www.w3.org/1999/html">{{ \Illuminate\Support\Facades\Auth::user()->name }}</a>--}}
        {{--            </div>--}}

        {{--            exports--}}
        <div>
            <a href="{{ url('export') }}" class="btn btn-outline-dark mb-2">Export Excel</a>
            <a href="{{ url('pdf') }}" class="btn btn-outline-dark mb-2">Export PDF</a>
        </div>
        {{--table--}}
        {{--            <div  class="col-lg-3 col-md-18 col-sm-8">--}}
        <div>

            <table class="table table table-bordered table-striped" >
                <tr>
                    <th>Id</th>
                    <td>Date</td>
                    <td>CloudCover</td>
                    <td>Visibility</td>
                    <td>Temperature</td>
                    <td>Dew Point</td>
                    <td>Humidity</td>
                    <td>Wind</td>
                    <td>Pressure</td>
                    <td>Altimeter</td>
                    <td>SolarEnergy</td>

                </tr>

                @foreach($productions as $production)

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

                        {{--                            <td><a href=""><button>Edit</button>&nbsp;&nbsp;<button>Delete</button></a></td>--}}
                    </tr>
                @endforeach

            </table>
        </div>



    </div>


    <script src="{{asset('../assets/img/logo-small.png../assets/js/core/jquery.min.js')}}"}></script>
    <script src="{{asset('../assets/js/core/popper.min.js')}}"> </script>
    <script src="{{asset('../assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('../assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--  Google Maps Plugin    -->
    <script src="{{asset('https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE')}}"></script>
    <!-- Chart JS -->
    <script src="{{asset('../assets/js/plugins/chartjs.min.js')}}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{asset('../assets/js/plugins/bootstrap-notify.js')}}"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('../assets/js/paper-dashboard.min.js?v=2.0.0')}}" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{asset('../assets/demo/demo.js')}}"></script>

    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartsPages();
        });
    </script>
    </div>
    </div>

    </div>
    </div>

@endsection
