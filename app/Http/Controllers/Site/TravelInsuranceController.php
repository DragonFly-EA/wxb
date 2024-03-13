<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\TravelInsurance;
use App\Models\TravelRequirements;
use App\Models\Wifi;
use Illuminate\Http\Request;

class TravelInsuranceController extends Controller
{
    public function index(){
        $travel = TravelInsurance::first();
        $menus = Menu::with('titles')->orderBy('id')->get();
        return view('cms.travel-insurance',compact('travel','menus'));
    }
    public function french(){
        $travelInsurance=TravelInsurance::where('language','fr')->first();
        $menus = Menu::where('language', 'fr')-> with('titles')->orderBy('id')->get();
        return view('cms.french.travel-insurance',compact('menus', 'travelInsurance'));
    }

    public function chinese(){
        $travelInsurance=TravelInsurance::where('language','cn')->first();
        $menus = Menu::where('language', 'cn')-> with('titles')->orderBy('id')->get();
        return view('cms.chinese.travel-insurance',compact('menus', 'travelInsurance'));
    }

}
