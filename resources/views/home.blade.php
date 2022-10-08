@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body" style="height: 300px;">

                    @if(Auth::user())
                    <h4>Weather Forcast using OpenWeatherMap and location United Kingdom Only</h4>
                         <select class="form-control select2" id="county" onchange="getCities()">
                                        
                                <option disabled selected>Select</option>    
                                @foreach($list as $key => $value)
                                    <option value="{{ $key }}">{{ $key }}</option>    
                                @endforeach
                                            
                         </select>

                    <div id="citiesDiv" style="display: none;margin-top: 50px;">
                        
                    <select class="form-control select2" id="cities">                        
                    </select>    
                    <br><br>                    
                    <button style="form-control" onClick="getWeather()">Get Data</button>
                    <br><br>
                        <div class="jumbotron" style="display: none;" >
                            <div class="row w-100">
                                    <div class="col-md-3">
                                        <div class="card border-info mx-sm-1 p-3">
                                            <div class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-car" aria-hidden="true"></span></div>
                                            <div class="text-info text-center mt-3"><h4>Day</h4></div>
                                            <div class="text-info text-center mt-2"><h5><span id="day"></span></h5></div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card border-success mx-sm-1 p-3">
                                            <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div>
                                            <div class="text-success text-center mt-3"><h4>Night</h4></div>
                                            <div class="text-success text-center mt-2"><h5><span id="night"></span></h5></div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card border-danger mx-sm-1 p-3">
                                            <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fa fa-heart" aria-hidden="true"></span></div>
                                            <div class="text-danger text-center mt-3"><h4>Evening</h4></div>
                                            <div class="text-danger text-center mt-2"><h5><span id="eve"></span></h5></div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card border-warning mx-sm-1 p-3">
                                            <div class="card border-warning shadow text-warning p-3 my-card" ><span class="fa fa-inbox" aria-hidden="true"></span></div>
                                            <div class="text-warning text-center mt-3"><h4>Morning</h4></div>
                                            <div class="text-warning text-center mt-2"><h5><span id="mor"></span></h5></div>
                                        </div>
                                    </div>
                             </div>
                        </div>                    
                    </div>
                    <br><br>
                    <h4>Weather Forcast using Weather Api and location any where</h4>
                         <select class="form-control select2" id="country" onchange="getWetherAll()">
                                        
                                <option disabled selected>Select</option>    
                                @foreach($listCountry as $key => $value)
                                    <option value="{{ $value }}">{{ $value }}</option>    
                                @endforeach
                                            
                         </select>
                         <br><br>
                         <div id="responseAll" style="display:none;">
                            <div class="jumbotron">
                                <div class="row w-100">
                                        <div class="col-md-3">
                                            <div class="card border-info mx-sm-1 p-3">
                                                <div class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-car" aria-hidden="true"></span></div>
                                                <div class="text-info text-center mt-3"><h4>Feels Like C</h4></div>
                                                <div class="text-info text-center mt-2"><h5><span id="feellike"></span></h5></div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card border-success mx-sm-1 p-3">
                                                <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div>
                                                <div class="text-success text-center mt-3"><h4>Feels Like F</h4></div>
                                                <div class="text-success text-center mt-2"><h5><span id="feellikef"></span></h5></div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card border-danger mx-sm-1 p-3">
                                                <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fa fa-heart" aria-hidden="true"></span></div>
                                                <div class="text-danger text-center mt-3"><h4>Humidity</h4></div>
                                                <div class="text-danger text-center mt-2"><h5><span id="humidity"></span></h5></div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card border-warning mx-sm-1 p-3">
                                                <div class="card border-warning shadow text-warning p-3 my-card" ><span class="fa fa-inbox" aria-hidden="true"></span></div>
                                                <div class="text-warning text-center mt-3"><h4>Cloud</h4></div>
                                                <div class="text-warning text-center mt-2"><h5><span id="cloud"></span></h5></div>
                                            </div>
                                        </div>
                                 </div>
                            </div> 
                        </div>                    
                @endif                                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script type="text/javascript">
    
       
    function getCities() {
        
        var county = $("#county").val();
        $.ajax({
            type: 'POST',
            url: "{{ url('/get-cities') }}",
            data: {county : county,"_token": "{{ csrf_token() }}" },
            dataType: 'json',
            success: function (data) {
               
               $("#cities").empty();
                $.each(data, function (i, item) {

                    

                    $('#cities').append($('<option>', { 
                         value: item.value,
                         text : item.value 
                    }));
                });

                $("#citiesDiv").show();

            },
            error: function (data) {
                
                alert("Try Another Cities")
            }
        });
    }

    function getWeather() {
       
       var county = $("#county").val();
       var cities = $("#cities").val();
        
        $.ajax({
            type: 'POST',
            url: "{{ url('/get-weather') }}",
            data: {county : county,cities:cities,"_token": "{{ csrf_token() }}"},
            dataType: 'json',
            success: function (data) {
                    console.log(data.data.city);
                    var today = new Date();
                    var day =today.getDay();
                    $("#day").text(data.data.list[day].feels_like.day+' C');
                    $("#night").text(data.data.list[day].feels_like.night+' C');
                    $("#mor").text(data.data.list[day].feels_like.morn+' C');
                    $("#eve").text(data.data.list[day].feels_like.eve+' C');
                    $(".jumbotron").show();

            },
            error: function (data) {
                console.log(data);
            }
        });       

    }

    function getWetherAll() {
       
        var country = $("#country").val();

        $.ajax({
            type: 'POST',
            url: "{{ url('/get-weather-all') }}",
            data: {country : country,"_token": "{{ csrf_token() }}"},
            dataType: 'json',
            success: function (data) {

                    $("#feellike").text(data.data.current.feelslike_c+" C");
                    $("#feellikef").text(data.data.current.feelslike_f+" F");
                    $("#humidity").text(data.data.current.humidity);
                    $("#cloud").text(data.data.current.cloud);

                    
                    $("#responseAll").show();

            },
            error: function (data) {
                console.log(data);
            }
        });  
    }    
</script>
