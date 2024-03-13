<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\SpecialAssistance;
use App\Models\Sustainability;
use App\Models\Terms;
use Illuminate\Http\Request;

class SpecialAssistanceController extends Controller
{
    public function index(){
        $special=SpecialAssistance::first();
        $menus = Menu::with('titles')->orderBy('id')->get();
        return view('cms.special-assistance', compact('special','menus'));

    }

    public function french(){
        $special=SpecialAssistance::where('language','fr')->first();
        $menus = Menu::where('language', 'fr')-> with('titles')->orderBy('id')->get();
        return view('cms.french.special-assistance',compact('menus', 'special'));
    }

    public function chinese(){
        $special=SpecialAssistance::where('language','cn')->first();
        $menus = Menu::where('language', 'cn')-> with('titles')->orderBy('id')->get();
        return view('cms.chinese.special-assistance',compact('menus', 'special'));
    }

}
