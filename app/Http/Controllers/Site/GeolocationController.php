<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
require_once public_path("/Db/geoip2.phar");
use GeoIp2\Database\Reader;
use Illuminate\Http\Request;

class GeolocationController extends Controller
{
    //
    public function geoLocation(){
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $reader = new Reader(public_path('Db/GeoLite2-Country.mmdb'));
        try{
            $record = $reader->country($ip);
            $country_data = [];
            $country_data[] = [
                'iso_code'=>$record->country->isoCode,
                'country'=>$record->country->name,
            ];
            return $country_data;
        }
        catch (\Exception $e)
        {
            echo $e;
        }
    }
    public function airports()
    {
        $airportsJson = file_get_contents(public_path('Db/airport-codes_json2.json'));
        $airports = json_decode($airportsJson);

        $routesJson = file_get_contents(public_path("Db/routeFares.json"));
        $routes = json_decode($routesJson);

        if ($airports === null || $routes === null) {
            echo "JSON decoding failed.";
            return;
        }
        $deals = $routes->deals;
        $posts = array_map(function ($deals) {
            return $deals->city;
        }, $deals);
        $airport_data = array_filter($airports, function ($airport) use ($posts) {
            return in_array($airport->iata_code, $posts);
        });
        $array = array_values($airport_data);
        return json_encode($array);
    }
}
