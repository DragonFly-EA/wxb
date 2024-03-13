<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Slider;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('enable', true)->orderBy('id')->get();
        $menus = Menu::with('titles')->orderBy('id')->get();
        return view('cms.careers', compact('sliders','menus'));
    }
    public function french()
    {
        $sliders = Slider::where('language','fr')->where('enable', true)->orderBy('id')->get();
        $menus = Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        return view('cms.french.careers', compact('sliders','menus'));
    }
    public function chinese()
    {
        $sliders = Slider::where('language','cn')->where('enable', true)->orderBy('id')->get();
        $menus = Menu::where('language','cn')->with('titles')->orderBy('id')->get();
        return view('cms.chinese.careers', compact('sliders','menus'));
    }
}
