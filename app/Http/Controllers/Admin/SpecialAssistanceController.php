<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentOption;
use App\Models\SpecialAssistance;
use Illuminate\Http\Request;

class SpecialAssistanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $specialAssistance = SpecialAssistance::first();
        $specialAssistance_fr = SpecialAssistance::where('language','fr')->first();
        $specialAssistance_cn = SpecialAssistance::where('language','cn')->first();
        return view('admin.specialassistance', compact('specialAssistance', 'specialAssistance_cn', 'specialAssistance_fr'));
    }

    public function update(Request $request)
    {
        $specialAssistanceId = SpecialAssistance::find($request->id);
        if ($request->hasFile('banner') || $request->hasFile('icon')) {
            $banner1 = request('banner') == null ? $specialAssistanceId->banner : request('banner')->store('specialAssistance', 'public');
            $icon1 = request('icon') == null ? $specialAssistanceId->banner : request('icon')->store('specialAssistance', 'public');
            $specialAssistanceId->banner = $banner1;
            $specialAssistanceId->icon = $icon1;
            $specialAssistanceId->title_1 = $request->title_1;
            $specialAssistanceId->short_description = $request->description;
            $specialAssistanceId->content_1 = $request->content_1;
            $specialAssistanceId->content_2 = $request->content_2;

        } else {
            $specialAssistanceId->title_1 = $request->title_1;
            $specialAssistanceId->short_description = $request->description;
            $specialAssistanceId->content_1 = $request->content_1;
            $specialAssistanceId->content_2 = $request->content_2;
        }
        $specialAssistanceId->push();
        toast('Successfully Updated About Page', 'success', 'top-right');
        return redirect()->back();
    }
}
