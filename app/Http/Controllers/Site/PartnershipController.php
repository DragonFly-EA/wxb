<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Partnership;
use Illuminate\Http\Request;

class PartnershipController extends Controller
{
    public function index(){
        $partnership = Partnership::first();
        $menus = Menu::where('language','en')->with('titles')->orderBy('id')->get();
        return view('cms.partnership',compact('partnership',compact('menus')));
    }
    public function french(){
        $partnership = Partnership::where('language','fr')->first();
        $menus = Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        return view('cms.french.partnership',compact('partnership',compact('menus')));
    }
    public function chinese(){
        $partnership = Partnership::where('language','cn')->first();
        $menus = Menu::where('language','cn')->with('titles')->orderBy('id')->get();
        return view('cms.chinese.partnership',compact('partnership',compact('menus')));
    }
}
