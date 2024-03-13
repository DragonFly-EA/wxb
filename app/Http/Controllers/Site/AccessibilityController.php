<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Accessbility;
use App\Models\Menu;
use Illuminate\Http\Request;

class AccessibilityController extends Controller
{
    public function index(){
        $accessibility = Accessbility::first();
        $menus = Menu::where('language','en')->with('titles')->orderBy('id')->get();
        return view('cms.accessibility',compact('accessibility','menus'));
    }
    public  function french()
    {
        $accessibility=Accessbility::where('language', 'fr')->first();
        $menus=Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        return view('cms.french.accessibility', compact('accessibility', 'menus'));
    }
    public  function chinese()
    {
        $accessibility=Accessbility::where('language', 'cn')->first();
        $menus=Menu::where('language','cn')->with('titles')->orderBy('id')->get();
        return view('cms.chinese.accessibility', compact('accessibility', 'menus'));
    }
}
