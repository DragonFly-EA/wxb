<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Wifi;
use Illuminate\Http\Request;

class WifiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
     $wifi=Wifi::first();
     $wifi_fr=Wifi::where('language','fr')->first();
     $wifi_cn=Wifi::where('language','cn')->first();
     return view('admin.wifi', compact('wifi', 'wifi_fr', 'wifi_cn'));
    }


}
