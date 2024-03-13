<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\MedicalInformation;
use App\Models\Menu;
use Illuminate\Http\Request;

class MediaInformationController extends Controller
{
    public function index(){
        $medical  = MedicalInformation::first();
        $menus = Menu::where('language','en')->with('titles')->orderBy('id')->get();
        return view('cms.medical-information',compact('medical','menus'));
    }
    public function french(){
        $medical  = MedicalInformation::where('language','fr')->first();
        $menus = Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        return view('cms.chinese.medical-information',compact('medical','menus'));
    }
    public function chinese(){
        $medical  = MedicalInformation::where('language','fr')->first();
        $menus = Menu::where('language','cn')->with('titles')->orderBy('id')->get();
        return view('cms.chinese.medical-information',compact('medical','menus'));
    }
}
