<?php


dadsa
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherApi extends Controller
{


    public function callGeo(Request $request)
    {


        $cityName = $request->input('city');
        $apiKey =

        $apiKey = "inset_your_api_key_from_your_open_weather_profile";

        $response = Http::get("http://api.openweathermap.org/geo/1.0/direct?", [
            "q" => $cityName,
            "limit" => 5,
            "appid" => $apiKey
        ]);

            $responseBody = json_decode($response->collect(0));




        $weatherResponse = Http::get("https://api.openweathermap.org/data/2.5/weather?", [
            'lat' => $responseBody->lat,
            'lon' => $responseBody->lon,
            'appid' => $apiKey
        ]);

       $weatherResponseBody = json_decode($weatherResponse->collect([]));



        return view('weather_call', [
            'weather' => $weatherResponseBody
        ]);


    }



}
