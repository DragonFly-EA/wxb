<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Faqs;
use App\Models\Menu;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function index(){
        $faqs=Faqs::first();
        $menus = Menu::where('language','en')->with('titles')->orderBy('id')->get();
        return view('cms.faqs', compact('faqs','menus'));
    }
    public function french(){
        $faqs=Faqs::where('language','fr')->first();
        $menus = Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        return view('cms.french.faqs', compact('faqs','menus'));
    }
    public function chinese(){
        $faqs=Faqs::where('language','cn')->first();
        $menus = Menu::where('language','cn')->with('titles')->orderBy('id')->get();
        return view('cms.chinese.faqs', compact('faqs','menus'));
    }
}
