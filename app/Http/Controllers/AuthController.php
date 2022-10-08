<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;
use \Exception;


class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register','list','getCities','getWeather','logout','refresh','getWeatherMap']]);
    }

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');

        $token = auth()->guard('api')->attempt($credentials);
        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], 401);
        }

        $user = auth('api')->user();
        Session::put('token', $token);
        
        return response()->json([
            'status' => 'success',
            'message' => 'User Logined successfully',
            'user' => $user,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);

    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = auth()->guard('api')->login($user);
        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'user' => $user,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
    }

    public function logout(Request $request)
    {   

        auth()->guard('api')->logout();

        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
    }

    public function refresh(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'user' => auth()->guard('api')->user(),
            'authorisation' => [
                'token' =>  auth()->guard('api')->refresh(),
                'type' => 'bearer',
            ]
        ]);
    }

    public function getWeather(Request $request)
    {

        $input = $request->all();

        $json ="";
        $city    = $input['cities'];
        $country = $input['country'];
        try{

            $url     = 'http://api.openweathermap.org/data/2.5/forecast/daily?q=' . $city . ',' . $country . '&units=metric&cnt=7&lang=en&appid=c0c4a4b4047b97ebc5948ac9c48c0559';
            $json    = file_get_contents( $url );
            $json    = json_decode($json);

         } catch (Exception $e) {

            return response()->json([

                'status'  => 'Failed',
                'data'    => null,
                'message' => 'Failed to load the weather of the location: '.$city,   
            ]);
        }; 
        return response()->json([
            'status' => 'success',
            'data' => $json
        ]);   

       

    }  

    public function getWeatherMap(Request $request)
    {

        $input = $request->all();

        $json ="";
        $country = $input['country'];
        try{
            
            $url='http://api.weatherapi.com/v1/current.json?key=377efb99cfd94b44a0b121421220810&q='.$country.'&aqi=no';
            $json    = file_get_contents( $url );
            $json    = json_decode($json);

         } catch (Exception $e) {

            return response()->json([

                'status'  => 'Failed',
                'data'    => null,
                'message' => 'Failed to load the weather of the location: '.$city,   
            ]);
        }; 
        return response()->json([
            'status' => 'success',
            'data' => $json
        ]);
    }                 
        


}