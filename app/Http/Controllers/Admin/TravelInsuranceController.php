<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SpecialAssistance;
use App\Models\TravelInsurance;
use Illuminate\Http\Request;

class TravelInsuranceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $travelInsurance=TravelInsurance::first();
        $travelInsurance_fr=TravelInsurance::where('language','fr')->first();
        $travelInsurance_cn=TravelInsurance::where('language','cn')->first();
        return view('admin.travel-insurance', compact('travelInsurance','travelInsurance_fr','travelInsurance_cn'));
    }
    public  function update (Request $request)
    {
        $travelInsuranceId=TravelInsurance::find($request->id);
        if($request->hasFile('banner')) {
            $banner1 = request('banner') == null ? $travelInsuranceId->banner : request('banner')->store('travelInsurance', 'public');
            $travelInsuranceId->banner=$banner1;
            $travelInsuranceId->title_1=$request->title_1;
            $travelInsuranceId->title_2=$request->title_2;
            $travelInsuranceId->content=$request->content_1;
        }else{
            $travelInsuranceId->title_1=$request->title_1;
            $travelInsuranceId->title_2=$request->title_2;
            $travelInsuranceId->content=$request->content_1;
        }
        $travelInsuranceId->push();
        toast('Successfully Updated About Page','success','top-right');
        return redirect()->back();

    }






}
