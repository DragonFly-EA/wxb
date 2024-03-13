<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class NewsLetterPreferenceController extends Controller
{
    public function index(){
        $menus = Menu::with('titles')->orderBy('id')->get();
        return view('cms.newsletter-preference',compact('menus'));
    }
    public function french(){
        $menus = Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        return view('cms.french.newsletter-preference',compact('menus'));
    }
    public function chinese(){
        $menus = Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        return view('cms.chinese.newsletter-preference',compact('menus'));
    }
}
