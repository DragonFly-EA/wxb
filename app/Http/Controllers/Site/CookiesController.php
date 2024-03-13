<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class CookiesController extends Controller
{
    public function index(){
        $menus = Menu::with('titles')->orderBy('id')->get();
        return view('cms.cookies',compact('menus'));
    }
    public function french()
    {
        $menus = Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        return view('cms.french.cookies',compact('menus'));
    }
    public function chinese()
    {
        $menus = Menu::where('language','cn')->with('titles')->orderBy('id')->get();
        return view('cms.chinese.cookies',compact('menus'));
    }
}
