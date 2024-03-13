<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Terms;
use App\Models\TravelInformatiom;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function index(){
        $terms=Terms::first();
        $menus = Menu::with('titles')->orderBy('id')->get();
        return view('cms.terms', compact('terms','menus'));

    }

    public function french(){
        $terms=Terms::where('language','fr')->first();
        $menus = Menu::where('language', 'fr')-> with('titles')->orderBy('id')->get();
        return view('cms.french.terms',compact('menus', 'terms'));
    }

    public function chinese(){
        $terms=Terms::where('language','cn')->first();
        $menus = Menu::where('language', 'cn')-> with('titles')->orderBy('id')->get();
        return view('cms.chinese.terms',compact('menus', 'terms'));
    }


}
