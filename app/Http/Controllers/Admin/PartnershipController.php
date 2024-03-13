<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Partnership;
use Illuminate\Http\Request;

class PartnershipController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $partnership=Partnership::first();
        $partnership_fr=Partnership::where('language','fr')->first();
        $partnership_cn=Partnership::where('language','cn')->first();
        return view('admin.partnership', compact('partnership','partnership_fr','partnership_cn'));

    }

    public  function update(Request $request)
    {
        $partnership=Partnership::find($request->id);
        if($request->hasFile('banner_1'))
        {
            $banner_1=request('banner_1')==null? $partnership->banner:request('banner_1')->store('partnership', 'public');
            $partnership->banner=$banner_1;
            $partnership->title_1=$request->title_1;
            $partnership->title_2=$request->title_2;
            $partnership->content=$request->content_1;
        }else{
            $partnership->title_1=$request->title_1;
            $partnership->title_2=$request->title_2;
            $partnership->content=$request->content_1;
        }
        $partnership->push();
        toast('Successfully Updated About Page','success','top-right');
        return redirect()->back();

    }


}
