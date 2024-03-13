<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\PaymentOption;
use Illuminate\Http\Request;

class PaymentOptionsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $paymentOptions=PaymentOption::first();
        $paymentOptions_fr=PaymentOption::where('language','fr')->first();
        $paymentOptions_cn=PaymentOption::where('language','cn')->first();
        return view('admin.paymentoptions', compact('paymentOptions','paymentOptions_fr','paymentOptions_cn', 'menus'));

    }

    public  function update (Request $request)
    {
        $paymentOptionId=PaymentOption::find($request->id);

        if($request->hasFile('banner')) {

            $banner1 = request('banner') == null ? $paymentOptionId->banner : request('banner')->store('paymentOption', 'public');

            $paymentOptionId->banner=$banner1;
            $paymentOptionId->title_1=request('title_1');
            $paymentOptionId->title_2=request('title_2');
            $paymentOptionId->title_3=request('title_3');
            $paymentOptionId->content_1=request('content_1');
            $paymentOptionId->content_2=request('content_2');

        }else{
            $paymentOptionId->title_1=request('title_1');
            $paymentOptionId->title_2=request('title_2');
            $paymentOptionId->title_3=request('title_3');
            $paymentOptionId->content_1=request('content_1');
            $paymentOptionId->content_2=request('content_2');

        }
        $paymentOptionId->push();
        toast('Successfully Updated About Page','success','top-right');
        return redirect()->back();


    }





}
