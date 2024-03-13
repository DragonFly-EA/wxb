<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\TravelInformatiom;
use App\Models\Wifi;
use Illuminate\Http\Request;

class TavelInformationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $travelInformation=TravelInformatiom::first();
        $travelInformation_fr=TravelInformatiom::where('language','fr')->first();
        $travelInformation_cn=TravelInformatiom::where('language','cn')->first();
        return view('admin.travel-information', compact('travelInformation', 'travelInformation_fr', 'travelInformation_cn', 'menus'));
    }

}
