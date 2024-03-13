<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Sustainability;
use Illuminate\Http\Request;

class SustainabilityController extends Controller
{
    public function index(){
        $sustainability=Sustainability::first();
        $menus = Menu::where('language','en')->with('titles')->orderBy('id')->get();
        return view('cms.sustainability', compact('sustainability','menus'));
    }
    public function french(){
        $sustainability=Sustainability::where('language','fr')->first();
        $menus = Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        return view('cms.french.sustainability', compact('sustainability','menus'));
    }
    public function chinese(){
        $sustainability=Sustainability::where('language','cn')->first();
        $menus = Menu::where('language','cn')->with('titles')->orderBy('id')->get();
        return view('cms.chinese.sustainability', compact('sustainability','menus'));
    }

}
