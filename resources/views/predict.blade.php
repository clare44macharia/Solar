@extends('layouts.admin')

@section('content')


    <body>

        <div class="main-panel">
            @include('layouts.header')


            <div class="content">

                <div class="col-md-4">

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Expected Production</h4>
                            @if(!empty($solar))
                                <div>kW
                               {{$solar}}
                                </div>
                            @else
                                <span>CLick predict to get a value</span>
                            @endif

                        </div>
                    </div>
                </div>

                <div class="card card-user">
                        <div class="card-header">
                            <h5 class="card-title">Predict Day-Ahead Production</h5>
                        </div>

                        <div class="card-body">
                            <div class="form">



                               <form action="{{route('predict')}}"method="post">
                                    @csrf
                                   <div class="row">
                                       <div class="col-md-5 pl-1">
                                           <div class="form-row">
                                                   <label>Cloud Coverage</label>
                                                   <input type="text" class="form-control"  name="CloudCoverage" required="required">


                                           </div>
                                       </div>

                                       <div class="col-md-5 pl-1">
                                           <div class="form-row">
                                               <label>Visibility</label>
                                               <input type="text" class="form-control" name="Visibility" required="required">
                                           </div>
                                       </div>

                                       <div class="col-md-5 pl-1">
                                           <div class="form-row">
                                               <label>Temperature</label>
                                               <input type="text" class="form-control" name="Temperature">
                                           </div>
                                       </div>


                                       <div class="col-md-5 pl-1">
                                           <div class="form-row">
                                               <label>Dew Point</label>
                                               <input type="text" class="form-control" name="DewPoint">
                                           </div>
                                       </div>

                                       <div class="col-md-5 pl-1">
                                           <div class="form-row">
                                                   <label>Relative humidity</label>
                                                   <input type="text" class="form-control" name="RelativeHumidity">
                                             </div>
                                        </div>

                                       <div class="col-md-5 pl-1">
                                           <div class="form-row">
                                               <label>Wind Speed</label>
                                               <input type="text" class="form-control" name="WindSpeed" >
                                           </div>
                                       </div>


                                       <div class="col-md-5 pl-1">
                                               <div class="form-row">
                                                   <label>Station pressure</label>
                                                   <input type="text" class="form-control"  name="StationPressure" >
                                               </div>
                                       </div>

                                       <div class="col-md-5 pl-1">
                                           <div class="form-row">
                                               <label>Altimeter</label>
                                               <input type="text" class="form-control"  name="Altimeter" >
                                           </div>
                                       </div>


                                           <div class="col-md-5 pl-1">
                                               <div class="update ml-auto mr-auto">

                                                   <button type="submit" class="btn btn-primary btn-round">predict</button>
                                               </div>
                                           </div>
{{--                                       <div class="popup" onclick="myFunction()">Click me!--}}
{{--                                           <span class="popuptext" id="myPopup">Popup text...</span>--}}
{{--                                           <button type="submit" class="btn btn-primary btn-round">predict</button>--}}
{{--                                       </div>--}}

                                       <script>
                                           // When the user clicks on <div>, open the popup
                                           function myFunction() {
                                               var popup = document.getElementById("myPopup");
                                               popup.classList.toggle("show");
                                           }
                                       </script>





                                   </div>
                               </form>
                            </div>

                        </div>
                    </div>


                </div>
        </div>

    </body>

@endsection
