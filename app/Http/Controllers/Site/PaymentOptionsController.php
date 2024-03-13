<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\PaymentOption;
use Illuminate\Http\Request;

class PaymentOptionsController extends Controller
{
    public function index(){
        $payment = PaymentOption::first();
        $menus = Menu::where('language','en')->with('titles')->orderBy('id')->get();
        return view('cms.payment-options',compact('payment','menus'));
    }
    public function french(){
        $payment = PaymentOption::where('language','fr')->first();
        $menus = Menu::where('language','fr')->with('titles')->orderBy('id')->get();
        return view('cms.french.payment-options',compact('payment','menus'));
    }
    public function chinese(){
        $payment = PaymentOption::where('language','cn')->first();
        $menus = Menu::where('language','cn')->with('titles')->orderBy('id')->get();
        return view('cms.chinese.payment-options',compact('payment','menus'));
    }
}
