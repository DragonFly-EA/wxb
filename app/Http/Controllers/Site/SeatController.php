<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Seat;
use App\Models\Sitemap;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    public function index(){
        $seat=Seat::first();
        $menus = Menu::with('titles')->orderBy('id')->get();
        return view('cms.seat', compact('seat','menus'));

    }

    public function french(){
        $seat=Seat::where('language','fr')->first();
        $menus = Menu::where('language', 'fr')-> with('titles')->orderBy('id')->get();
        return view('cms.french.seat',compact('menus', 'seat'));
    }

    public function chinese(){
        $seat=Seat::where('language','cn')->first();
        $menus = Menu::where('language', 'cn')-> with('titles')->orderBy('id')->get();
        return view('cms.chinese.seat',compact('menus', 'seat'));
    }
}
