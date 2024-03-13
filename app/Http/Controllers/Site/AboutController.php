<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Menu;
use App\Models\Value;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function  index(){
        $menus = Menu::where('language','en')->with('titles')->orderBy('id')->get();
        $about = About::first();
        $values = Value::where('language','en')->orderBy('id')->get();
        return view('cms.about-us',compact('about','values','menus'));
    }
    public function french(){
        $menus = Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        $about = About::where('language','fr')->first();
        $values = Value::where('language','fr')->orderBy('id')->get();
        return view('cms.french.about-us',compact('about','values','menus'));
    }
    public function chinese(){
        $menus = Menu::where('language','cn')->with('titles')->orderBy('id')->get();
        $about = About::where('language','cn')->first();
        $values = Value::where('language','cn')->orderBy('id')->get();
        return view('cms.chinese.about-us',compact('about','values','menus'));
    }
}
