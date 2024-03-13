<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\CheckInOnline;
use App\Models\Menu;
use Illuminate\Http\Request;

class CheckInOnlineController extends Controller
{
    public function index(){
        $checkinOnline=CheckInOnline::first();
        $menus = Menu::where('language','en')->with('titles')->orderBy('id')->get();
        return view('cms.checkin-online', compact('checkinOnline','menus'));
    }
    public function french(){
        $checkinOnline=CheckInOnline::where('language','fr')->first();
        $menus = Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        return view('cms.french.checkin-online', compact('checkinOnline','menus'));
    }
    public function chinese(){
        $checkinOnline=CheckInOnline::where('language','cn')->first();
        $menus = Menu::where('language','cn')->with('titles')->orderBy('id')->get();
        return view('cms.chinese.checkin-online', compact('checkinOnline','menus'));
    }
}
