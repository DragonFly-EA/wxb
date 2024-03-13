<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Baggage;
use Illuminate\Http\Request;

class BaggageController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public  function index ()
    {
        $baggage = Baggage::first();
        $baggage_fr = Baggage::where('language','fr')->first();
        $baggage_cn = Baggage::where('language','cn')->first();
        return view('admin.baggage',compact('baggage','baggage_fr','baggage_cn'));
    }

    public  function update(Request $request)
    {
        $baggage = Baggage::find($request->id);
        if($request->hasFile('image_1') || $request->hasFile('image_2') || $request->hasFile('image_3'))
        {
            $image_1 = request('image_1')==null ? $baggage->image_1: request('image_1')->store('baggage','public');
            $image_2 = request('image_2') == null? $baggage->image_2:request('image_2')->store('baggage','public');
            $image_3 = request('image_3')== null ? $baggage->image_3 :request('image_3')->store('baggage','public');

            $baggage->image1 =$image_1;
            $baggage->title1 = $request->title_1;
            $baggage->content1 = $request->content_1;
            $baggage->title2 = $request->title_2;
            $baggage->content2 = $request->content_2;
            $baggage->title3 = $request->title_3;
            $baggage->content3 =  $request->content_3;
            $baggage->title4 =  $request->title_4;;
            $baggage->content4 =  $request->content_4;
            $baggage->content5 =  $request->content_5;
            $baggage->title5 =  $request->title_5;;
            $baggage->content6 =  $request->content_6;;
            $baggage->content7 =  $request->content_7;;
            $baggage->title6 =  $request->title_6;;
            $baggage->icon1 =  $request->icon_1;
            $baggage->content8 =  $request->content_8;
            $baggage->image2 = $image_2;
            $baggage->icon2 =  $request->icon_2;
            $baggage->title7 =  $request->title_7;
            $baggage->content9 =  $request->content_9;
            $baggage->image3 = $image_3;

        }
        else
        {
            $baggage->title1 = $request->title_1;
            $baggage->content1 = $request->content_1;
            $baggage->title2 = $request->title_2;
            $baggage->content2 = $request->content_2;
            $baggage->title3 = $request->title_3;
            $baggage->content3 =  $request->content_3;
            $baggage->title4 =  $request->title_4;;
            $baggage->content4 =  $request->content_4;
            $baggage->content5 =  $request->content_5;
            $baggage->title5 =  $request->title_5;;
            $baggage->content6 =  $request->content_6;;
            $baggage->content7 =  $request->content_7;;
            $baggage->title6 =  $request->title_6;;
            $baggage->icon1 =  $request->icon_1;
            $baggage->content8 =  $request->content_8;
            $baggage->icon2 =  $request->icon_2;
            $baggage->title7 =  $request->title_7;
            $baggage->content9 =  $request->content_9;
        }
        $baggage->push();
        toast('Successfully Updated About Page','success','top-right');
        return redirect()->back();

    }

}
