<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Category;
use App\Comment;

use Illuminate\Support\Facades\Cache;
use Log;

class AdministratorsController extends Controller
{
    //

    public function index()
    {

        $users = User::all();
        $posts = Post::all();
        $categories = Category::all();
        $comments = Comment::all();

        //Implement Weather Forecast
        $minutes = 60;
        $forecasts = Cache::remember('forecasts', $minutes, function () {
            Log::info("Not from cache");
            $app_id = config("here.app_id");
            $app_code = config("here.app_code");
            $lat = config("here.lat_default");
            $lng = config("here.lng_default");
            $url = "https://weather.api.here.com/weather/1.0/report.json?product=forecast_7days_simple&latitude=${lat}&longitude=${lng}&oneobservation=true&language=en&app_id=${app_id}&app_code=${app_code}";
            Log::info($url);
            $client = new \GuzzleHttp\Client();
            $res = $client->get($url);
            if ($res->getStatusCode() == 200) {
              $j = $res->getBody();
              $obj = json_decode($j);

              //dd($obj);  
            
              $forecasts = $obj->dailyForecasts->forecastLocation->forecast;           
            }
            
            return $forecasts;

          });
        return view('admin.index', compact('users', 'posts', 'categories', 'comments', 'forecasts'));


       
    }
}
