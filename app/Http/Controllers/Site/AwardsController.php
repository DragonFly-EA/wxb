<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\Menu;
use Illuminate\Http\Request;

class AwardsController extends Controller
{
    public function index(){
        $awards  = Award::where('language','en')->orderBy('id')->get();
        $menus = Menu::where('language','en')->with('titles')->orderBy('id')->get();
        return view('cms.awards',compact('awards','menus'));
    }
    public function french(){
        $awards  = Award::where('language','fr')->orderBy('id')->get();
        $menus = Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        return view('cms.french.awards',compact('awards','menus'));
    }
    public function chinese(){
        $awards  = Award::where('language','cn')->orderBy('id')->get();
        $menus = Menu::where('language','cn')->with('titles')->orderBy('id')->get();
        return view('cms.chinese.awards',compact('awards','menus'));
    }
}
