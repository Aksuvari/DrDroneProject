<?php

namespace App\Http\Controllers;

use Dnsimmons\OpenWeather\OpenWeather;
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
     */
    public function index()
    {
        $weather = new OpenWeather();
        $current= $weather->getCurrentWeatherByCityName("adana","metric");
        return view('Admin.Homepage.homepage',compact('current'));
    }

    public function dateWeather(Request  $request){
        header("Content-type:application/json;charset=utf-8");

        return true;
    }
}
