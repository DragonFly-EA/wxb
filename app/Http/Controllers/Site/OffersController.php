<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function index(){
        $menus = Menu::where('language','en')->with('titles')->orderBy('id')->get();
        return view('cms.offers',compact('menus'));
    }
    public function french(){
        $menus = Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        return view('cms.french.offers',compact('menus'));
    }
    public function chinese(){
        $menus = Menu::where('language','cn')->with('titles')->orderBy('id')->get();
        return view('cms.chinese.offers',compact('menus'));
    }
    public function view($offer){
        dd($offer);
    }
}
