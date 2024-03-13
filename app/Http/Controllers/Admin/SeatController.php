<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $seat = Seat::first();
        $seat_fr = Seat::where('language','fr')->first();
        $seat_cn = Seat::where('language','cn')->first();
        return view('admin.seat',compact('seat','seat_fr','seat_cn'));
    }
    public function update(Request $request)
    {
        $seat = Seat::find($request->id);
        if($request->hasFile('icon1') || $request->hasFile('image1') || $request->hasFile('image2'))
        {
            $icon1 = request('icon1')==null ? $seat->banner1: request('icon1')->store('seat','public');;
            $image1 = request('image1')==null ? $seat->banner1: request('image1')->store('seat','public');;
            $image2 = request('image2')==null ? $seat->banner1: request('image2')->store('seat','public');;
            $seat->header1 = $request->header1;
            $seat->header2 = $request->header2;
            $seat->icon1 = $icon1;
            $seat->image1 = $image1;
            $seat->image2 = $image2;
            $seat->content1 = $request->content1;
            $seat->content2 = $request->content2;
            $seat->content3 = $request->content3;
            $seat->content4 = $request->content4;
        }
        else{
            $seat->header1 = $request->header1;
            $seat->header2 = $request->header2;
            $seat->content1 = $request->content1;
            $seat->content2 = $request->content2;
            $seat->content3 = $request->content3;
            $seat->content4 = $request->content4;
        }
        $seat->push();
        toast('Successfully Updated Seat Page','success','top-right');
        return redirect()->back();
    }
}
