<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index(){
        $menus = Menu::where('language','en')->with('titles')->orderBy('id')->get();
        return view('cms.privacy-policy',compact('menus'));
    }
    public function french(){
        $menus = Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        return view('cms.french.privacy-policy',compact('menus'));
    }
    public function chinese(){
        $menus = Menu::with('titles')->orderBy('id')->get();
        return view('cms.chinese.privacy-policy',compact('menus'));
    }
}
