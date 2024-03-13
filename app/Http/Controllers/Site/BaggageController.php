<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Baggage;
use App\Models\Menu;
use Illuminate\Http\Request;

class BaggageController extends Controller
{
    public function index(){
         $baggage = Baggage::first();
        $menus = Menu::where('language','en')->with('titles')->orderBy('id')->get();
        return view('cms.baggage',compact('baggage','menus'));
    }
    public function french(){
        $baggage = Baggage::first();
        $menus = Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        return view('cms.french.baggage',compact('baggage','menus'));
    }
    public function chinese(){
        $baggage = Baggage::first();
        $menus = Menu::where('language','cn')->with('titles')->orderBy('id')->get();
        return view('cms.chinese.baggage',compact('baggage','menus'));
    }
}
