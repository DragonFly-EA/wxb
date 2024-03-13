<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\TravelInformatiom;
use App\Models\TravelInsurance;
use Database\Seeders\TravelInformationSeed;
use Illuminate\Http\Request;

class TravelInformationController extends Controller
{
    public function index(){
        $travelinfomation=TravelInformatiom::first();
        $menus = Menu::with('titles')->orderBy('id')->get();
        return view('cms.travel-information', compact('travelinfomation','menus'));

    }

    public function french(){
        $travelinfomation=TravelInformatiom::where('language','fr')->first();
        $menus = Menu::where('language', 'fr')-> with('titles')->orderBy('id')->get();
        return view('cms.french.travel-information',compact('menus', 'travelinfomation'));
    }

    public function chinese(){
        $travelinfomation=TravelInformatiom::where('language','cn')->first();
        $menus = Menu::where('language', 'cn')-> with('titles')->orderBy('id')->get();
        return view('cms.chinese.travel-information',compact('menus', 'travelinfomation'));
    }


}
