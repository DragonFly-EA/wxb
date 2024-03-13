<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Sitemap;
use App\Models\SpecialAssistance;
use Illuminate\Http\Request;

class SitemapController extends Controller
{

    public function index(){
        $sitamap=Sitemap::first();
        $menus = Menu::with('titles')->orderBy('id')->get();
        return view('cms.sitemap', compact('sitamap','menus'));

    }

    public function french(){
        $sitamap=Sitemap::where('language','fr')->first();
        $menus = Menu::where('language', 'fr')-> with('titles')->orderBy('id')->get();
        return view('cms.french.sitemap',compact('menus', 'sitamap'));
    }

    public function chinese(){
        $sitamap=Sitemap::where('language','cn')->first();
        $menus = Menu::where('language', 'cn')-> with('titles')->orderBy('id')->get();
        return view('cms.chinese.sitemap',compact('menus', 'sitamap'));
    }



}
