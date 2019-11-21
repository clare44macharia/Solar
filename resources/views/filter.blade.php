@extends('layouts.admin')

{{--@include('navBar')--}}


@section('content')

<html>
<head>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="                  " href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
</head>
    <body>

        <div class="main-panel">


            <div class="content">

            <div class="container box">

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


                <div class="panel panel-default">
                    <a href="{{ url('export') }}" class="btn btn-outline-dark mb-2">Export Excel</a>
                    <a href="{{ url('pdf') }}" class="btn btn-outline-dark mb-2">Export PDF</a>
                    <div class="panel-heading">
                        <div class="row">

                            <div class="col-md-5"> Total Records - <b><span id="total_records"></span></b></div>
                            <div class="col-md-5">
                                <div class="input-group input-daterange">
                                    <input type="text" name="from_date" id="from_date" readonly class="form-control" />
                                    <div class="input-group-addon">to</div>
                                    <input type="text"  name="to_date" id="to_date" readonly class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button type="button" name="filter" id="filter" class="btn btn-info btn-sm">Filter</button>
                                <button type="button" name="refresh" id="refresh" class="btn btn-warning btn-sm">Refresh</button>
                            </div>
                        </div>
                    </div>





                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                {{--                        <th>Id</th>--}}
                                <td>Date</td>
                                <td>Cloud Coverage</td>
                                <td>Visibility</td>
                                <td>Temperature</td>
                                <td>Dew Point</td>
                                <td>Relative humidity</td>
                                <td>Wind Speed</td>
                                <td>Station Pressure</td>
                                <td>Altimeter</td>
                                <td>Solar Energy</td>
                                {{--                        <td>Timestamps</td>--}}


                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        {{ csrf_field() }}
                         </div>
                      </div>
                </div>
            </div>
        </div>

    </body>
</html>

<script>
    $(document).ready(function(){

        var date = new Date();

        $('.input-daterange').datepicker({
            todayBtn: 'linked',
            format: 'yyyy-mm-dd',
            autoclose: true
        });

        var _token = $('input[name="_token"]').val();

        fetch_data();

        function fetch_data(from_date = '', to_date = '')
        {
            $.ajax({
                url:"{{ route('filter.fetch_data') }}",
                method:"POST",
                data:{from_date:from_date, to_date:to_date, _token:_token},
                dataType:"json",
                success:function(data)
                {
                    var output = '';
                    $('#total_records').text(data.length);
                    for(var count = 0; count < data.length; count++)
                    {



                        output += '<tr>';
                        // output += '<td>' + data[count].Id + '</td>';
                        output += '<td>' + data[count].Date+ '</td>';
                        output += '<td>' + data[count].CloudCoverage+ '</td>';
                        output += '<td>' + data[count].Visibility + '</td>';
                        output += '<td>' + data[count].Temperature+ '</td>';
                        output += '<td>' + data[count].DewPoint+ '</td>';
                        output += '<td>' + data[count].RelativeHumidity + '</td>';
                        output += '<td>' + data[count].WindSpeed + '</td>';
                        output += '<td>' + data[count].StationPressure + '</td>';
                        output += '<td>' + data[count].Altimeter + '</td>';
                        output += '<td>' + data[count].SolarEnergy+ '</td>';
                        // output += '<td>' + data[count].created_at+ '</td>';


                        '</tr>';
                    }
                    $('tbody').html(output);
                }
            })
        }

        $('#filter').click(function(){
            var from_date = $('#from_date').val();
            var to_date = $('#to_date').val();
            if(from_date != '' &&  to_date != '')
            {
                fetch_data(from_date, to_date);
            }
            else
            {
                alert('Both Date is required');
            }
        });

        $('#refresh').click(function(){
            $('#from_date').val('');
            $('#to_date').val('');
            fetch_data();
        });


    });
</script>

@endsection



