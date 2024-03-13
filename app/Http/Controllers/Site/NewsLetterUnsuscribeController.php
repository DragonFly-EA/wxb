<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class NewsLetterUnsuscribeController extends Controller
{
    public function index(){
        $menus = Menu::where('language','en')->with('titles')->orderBy('id')->get();
        return view('cms.newsletter-unsubscribe',compact('menus'));
    }
    public function french(){
        $menus = Menu::where('language','fr')->where('language','en')->with('titles')->orderBy('id')->get();
        return view('cms.french.newsletter-unsubscribe',compact('menus'));
    }
    public function chinese(){
        $menus = Menu::where('language','cn')->where('language','en')->with('titles')->orderBy('id')->get();
        return view('cms.chinese.newsletter-unsubscribe',compact('menus'));
    }
}
