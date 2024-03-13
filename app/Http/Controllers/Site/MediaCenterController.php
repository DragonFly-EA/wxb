<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MediaCenterController extends Controller
{
    public function index(){
        $menus = Menu::where('language','en')->with('titles')->orderBy('id')->get();
        return view('cms.media-center',compact('menus'));
    }
    public function french(){
        $menus = Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        return view('cms.french.media-center',compact('menus'));
    }
    public function chinese(){
        $menus = Menu::where('language','cn')->with('titles')->orderBy('id')->get();
        return view('cms.chinese.media-center',compact('menus'));
    }
}
