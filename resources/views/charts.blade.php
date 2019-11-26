

@extends('layouts.admin')


@section('content')


    <div class="main-panel">
<!DOCTYPE html>
<html lang="en">



<body class="">


@include ('layouts.header')
<div class="content">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-globe text-warning"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category"> Average Production</p>
                                {{$showAvgs1}}

                                {{--                                        <p class="card-title" id = "mean_production">2000kW--}}
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-refresh"></i> Entries
                        {{ $showCounts}}

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-money-coins text-success"></i>
                            </div>
                        </div>

                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Highest Production</p>
                                {{ $showMax}}

                                {{--                                        <p class="card-title">$ 15--}}
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-calendar-o"></i>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-vector text-danger"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Least Production</p>
                                {{ $showMin}}

                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-clock-o"></i> Entries

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                n                                      </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Entries</p>
                                {{ $showCounts}}
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">

                        <i class="fa fa-refresh"></i> Last Update:
                        @php
                            $mytime = Carbon\Carbon::now();
                            echo $mytime->toDateTimeString();
                        @endphp
                    </div>
                </div>
            </div>
        </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header ">
                            <h5 class="card-title">Performance Trends</h5>
                            <p class="card-category">Annual Performance</p>
                        </div>
                        <div class="card-body ">
                            <image src="{{asset('../assets/img/chart.png')}}"></image>

                            {{--                            <canvas id=chartHours width="400" height="100"></canvas>--}}
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="fa fa-history"></i> Updated 3 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="row">--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="card ">--}}
{{--                        <div class="card-header ">--}}
{{--                            <h5 class="card-title">Email Statistics</h5>--}}
{{--                            <p class="card-category">Last Campaign Performance</p>--}}
{{--                        </div>--}}
{{--                        <div class="card-body ">--}}
{{--                            <canvas id="chartEmail"></canvas>--}}
{{--                        </div>--}}
{{--                        <div class="card-footer ">--}}
{{--                            <div class="legend">--}}
{{--                                <i class="fa fa-circle text-primary"></i> Opened--}}
{{--                                <i class="fa fa-circle text-warning"></i> Read--}}
{{--                                <i class="fa fa-circle text-danger"></i> Deleted--}}
{{--                                <i class="fa fa-circle text-gray"></i> Unopened--}}
{{--                            </div>--}}
{{--                            <hr>--}}
{{--                            <div class="stats">--}}
{{--                                <i class="fa fa-calendar"></i> Number of emails sent--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-8">--}}
{{--                    <div class="card card-chart">--}}
{{--                        <div class="card-header">--}}
{{--                            <h5 class="card-title">NASDAQ: AAPL</h5>--}}
{{--                            <p class="card-category">Line Chart with Points</p>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <canvas id="speedChart" width="400" height="100"></canvas>--}}
{{--                        </div>--}}
{{--                        <div class="card-footer">--}}
{{--                            <div class="chart-legend">--}}
{{--                                <i class="fa fa-circle text-info"></i> Tesla Model S--}}
{{--                                <i class="fa fa-circle text-warning"></i> BMW 5 Series--}}
{{--                            </div>--}}
{{--                            <hr/>--}}
{{--                            <div class="card-stats">--}}
{{--                                <i class="fa fa-check"></i> Data information certified--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <footer class="footer footer-black  footer-white ">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row">--}}
{{--                    <nav class="footer-nav">--}}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="http://blog.creative-tim.com/" target="_blank">Blog</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="https://www.creative-tim.com/license" target="_blank">Licenses</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                    <div class="credits ml-auto">--}}
{{--              <span class="copyright">--}}
{{--                ©--}}
{{--                <script>--}}
{{--                  document.write(new Date().getFullYear())--}}
{{--                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim--}}
{{--              </span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </footer>--}}
</body>
    @endsection

<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
    });
</script>
</body>

</html>

{{--<!DOCTYPE html>--}}

{{--<html lang="en">--}}

{{--<head>--}}

{{--    <meta charset="utf-8">--}}

{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}

{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}


{{--    <title>My Charts</title>--}}


{{--    {!! Charts::styles() !!}--}}


{{--</head>--}}

{{--<body>--}}

{{--<!-- Main Application (Can be VueJS or other JS framework) -->--}}

{{--<div class="app">--}}

{{--    <center>--}}

{{--        {!! $chart->html() !!}--}}

{{--    </center>--}}

{{--</div>--}}

{{--<!-- End Of Main Application -->--}}

{{--{!! Charts::scripts() !!}--}}

{{--{!! $chart->script() !!}--}}

{{--</body>--}}

{{--</html>--}}
