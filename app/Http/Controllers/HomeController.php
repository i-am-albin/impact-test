<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * return with county in GB
     */

    public function index()
    {   
        $list=county_list();
        $listCountry=getCountry();
        return view('home',compact('list','listCountry'));
    }
    /**
     * List the cities
     *
     * @return cities
     * return with cities in requested county
     */
    public function getCities(Request $request)
    {
        $input = $request->all();
        $list=county_list();
        return response($list[$input['county']]);

    }
    /**
     * get the weather
     *
     * @return weather data
     * return with weather in requested county and cities
     */    
    public function getWeather(Request $request)
    {

        $input = $request->all();

        $city    = $input['cities'];
        $country = $input['county'];
        $url     = 'http://api.openweathermap.org/data/2.5/forecast/daily?q=' . $city . ',' . $country . '&units=metric&cnt=7&lang=en&appid=c0c4a4b4047b97ebc5948ac9c48c0559';
        $json    = file_get_contents( $url );
        $json    = json_decode($json);
        return response()->json([
            'status' => 'success',
            'data' => $json
        ]);              
        
    } 

    public function getWeatherAll(Request $request)
    {

        $input = $request->all();

        $country = $input['country'];
        $url='http://api.weatherapi.com/v1/current.json?key=377efb99cfd94b44a0b121421220810&q='.$country.'&aqi=no';
        $json    = file_get_contents( $url );
        $json    = json_decode($json);
        return response()->json([
            'status' => 'success',
            'data' => $json
        ]);              
        
    }     


}
