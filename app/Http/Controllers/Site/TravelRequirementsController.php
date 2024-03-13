<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\TravelRequirements;
use App\Models\Wifi;
use Illuminate\Http\Request;

class TravelRequirementsController extends Controller
{
    public function index(){
        $travelRequirements=TravelRequirements::first();
        $menus = Menu::where('language','en')->with('titles')->orderBy('id')->get();
        return view('cms.travel-requirements',compact('menus', 'travelRequirements'));

    }

    public function french(){
        $travelRequirements=TravelRequirements::where('language','fr')->first();
        $menus = Menu::where('language', 'fr')-> with('titles')->orderBy('id')->get();
        return view('cms.french.travel-requirements',compact('menus', 'travelRequirements'));
    }

    public function chinese(){
        $travelRequirements=Wifi::where('language','cn')->first();
        $menus = Menu::where('language', 'cn')-> with('titles')->orderBy('id')->get();
        return view('cms.chinese.travel-requirements',compact('menus', 'travelRequirements'));
    }
}
