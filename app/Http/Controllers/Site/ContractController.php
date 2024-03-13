<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Contract;
use App\Models\Menu;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index(){
        $contract=Contract::first();
        $menus = Menu::with('titles')->orderBy('id')->get();
        return view('cms.contract', compact('contract','menus'));
    }
    public function french(){
        $contract=Contract::where('language','fr')->first();
        $menus = Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        return view('cms.french.contract', compact('contract','menus'));
    }
    public function chinese(){
        $contract=Contract::where('language','cn')->first();
        $menus = Menu::where('language','cn')->with('titles')->orderBy('id')->get();
        return view('cms.chinese.contract', compact('contract','menus'));
    }
}
