@extends('layouts.admin')



@section('content')



    <!-- End Navbar -->
    <!-- <div class="panel-header panel-header-sm">


    </div> -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Simple Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">

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

                                </thead>
                                <tbody>
                                @foreach($productions as $production)

                                    <tr>
                                        <td>{{ $production->id }}</td>
                                        <td>{{$production['Date']}}</td>
                                        <td>{{$production['CloudCoverage']}}</td>
                                        <td>{{$production['Visibility']}}</td>
                                        <td>{{$production['Temperature']}}</td>
                                        <td>{{$production ['DewPoint']}}</td>
                                        <td>{{$production['RelativeHumidity']}}</td>
                                        <td>{{$production['WindSpeed']}}</td>
                                        <td>{{$production['StationPressure']}}</td>
                                        <td>{{$production['Altimeter']}}</td>
                                        <td>{{$production['SolarEnergy']}}</td>

                                        {{--                            <td><a href=""><button>Edit</button>&nbsp;&nbsp;<button>Delete</button></a></td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

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
        </div>
        </body>

        </html>


    </div>

@endsection
