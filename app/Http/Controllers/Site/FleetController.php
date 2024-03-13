<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Fleet;
use App\Models\Menu;
use Illuminate\Http\Request;

class FleetController extends Controller
{
    public function index(){
        $fleets = Fleet::where('language','en')->orderBy('id')->get();
        $menus = Menu::where('language','en')->with('titles')->orderBy('id')->get();
        return view('cms.fleet',compact('fleets','menus'));
    }
    public function french(){
        $fleets = Fleet::orderBy('id')->get();
        $menus = Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        return view('cms.french.fleet',compact('fleets','menus'));
    }
    public function  chinese(){
        $fleets = Fleet::where('language','cn')->orderBy('id')->get();
        $menus = Menu::where('language','cn')->with('titles')->orderBy('id')->get();
        return view('cms.chinese.fleet',compact('fleets','menus'));
    }
    public function view($slug){
        $fleet = Fleet::where('slug',$slug)->first();
        $menus = Menu::with('titles')->orderBy('id')->get();
        return view('cms.singlefleet',compact('fleet','menus'));
    }
}
