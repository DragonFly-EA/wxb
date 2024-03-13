<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Wifi;
use Illuminate\Http\Request;

class WifiController extends Controller
{
    public function index(){
        $wifi=Wifi::first();
        $menus = Menu:: where('language','en')->with('titles')->orderBy('id')->get();
        return view('cms.wifi',compact('menus', 'wifi'));
    }

    public function french(){
        $wifi=Wifi::where('language','fr')->first();
        $menus = Menu::where('language', 'fr')-> with('titles')->orderBy('id')->get();
        return view('cms.french.wifi',compact('menus', 'wifi'));
    }

    public function chinese(){
        $wifi=Wifi::where('language','cn')->first();
        $menus = Menu::where('language', 'cn')-> with('titles')->orderBy('id')->get();
        return view('cms.chinese.wifi',compact('menus', 'wifi'));
    }



}


