<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Dnsimmons\OpenWeather\OpenWeather;
use Illuminate\Http\Request;

class apicontroller extends Controller
{
    public function Weather(){
        $weather = new OpenWeather();
        $current= $weather->getCurrentWeatherByCityName("adana","metric");

    }

}
