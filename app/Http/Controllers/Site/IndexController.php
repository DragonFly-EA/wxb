<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $menus = Menu::where('language','en')->with('titles')->orderBy('id')->get();
        $sliders = Slider::where('language','en')->where('enable',true)->orderBy('id')->get();
        return view('welcome',compact('sliders','menus'));
    }
    public function french(){
        $menus = Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        $sliders = Slider::where('language','fr')->where('enable',true)->orderBy('id')->get();
        return view('cms.french.welcome',compact('sliders','menus'));
    }
    public function chinese(){
        $menus = Menu::where('language','cn')->with('titles')->orderBy('id')->get();
        $sliders = Slider::where('language','cn')->where('enable',true)->orderBy('id')->get();
        return view('cms.chinese.welcome',compact('sliders','menus'));
    }
}
