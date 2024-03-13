<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CheckInOnline;
use Illuminate\Http\Request;

class CheckInOnlineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){
        $check_in = CheckInOnline::first();
        $check_in_fr = CheckInOnline::where('language','fr')->first();
        $check_in_cn = CheckInOnline::where('language','cn')->first();
        return view('admin.checkin',compact('check_in','check_in_fr','check_in_cn'));
    }
    public function update(Request $request)
    {
        $check_in = CheckInOnline::find($request->id);
        if($request->hasFile('image1')|| $request->hasFile('banner1'))
        {
            $banner = request('banner1')==null ? $check_in->banner1: request('banner')->store('check_in','public');
            $image = request('image1')==null ? $check_in->image1: request('image1')->store('check_in','public');
            //
            $check_in->header = $request->header;
            $check_in->header1 = $request->header1;
            $check_in->title1 = $request->title1;
            $check_in->image1 = $image;
            $check_in->banner1 = $banner;
            $check_in->content1 = $request->content1;
            $check_in->content2 = $request->content2;
            $check_in->content3 = $request->content3;
        }
        else{
            $check_in->header = $request->header;
            $check_in->header1 = $request->header1;
            $check_in->title1 = $request->title1;
            $check_in->content1 = $request->content1;
            $check_in->content2 = $request->content2;
            $check_in->content3 = $request->content3;
        }
        $check_in->push();
        toast('Successfully Updated Check In Page','success','top-right');
        return redirect()->back();
    }
}
