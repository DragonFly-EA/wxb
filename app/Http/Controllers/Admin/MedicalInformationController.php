<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MedicalInformation;
use Database\Seeders\MedicalInformationSeed;
use Illuminate\Http\Request;

class MedicalInformationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        $medicalinfo=MedicalInformation::first();
        $medicalinfo_fr=MedicalInformation::where('language','fr')->first();
        $medicalinfo_cn=MedicalInformation::where('language','cn')->first();
        return view('admin.medicalinfo', compact('medicalinfo','medicalinfo_fr','medicalinfo_cn'));
    }

    public function update(Request $request)
    {
        $medicalinfo=MedicalInformation::find($request->id);

        if($request->hasFile('banner')|| $request->hasFile('icon')){
            $banner_1=request('banner')==null?$medicalinfo->banner:request('banner')->store('medicalInfo', 'public');
            $icon_1=request('icon')==null?$medicalinfo->icon:request('icon')->store('medicalInfo', 'public');

            $medicalinfo->banner=$banner_1;
            $medicalinfo->icon=$icon_1;
            $medicalinfo->title_1=$request->title;
            $medicalinfo->content_1=$request->content_1;
            $medicalinfo->content_2=$request->content_2;
            $medicalinfo->short_description=$request->description;

        }else{
            $medicalinfo->title_1=$request->title;
            $medicalinfo->content_1=$request->content_1;
            $medicalinfo->content_2=$request->content_2;
            $medicalinfo->short_description=$request->description;

        }
        $medicalinfo->push();
        toast('Successfully Updated About Page','success','top-right');
        return redirect()->back();

    }







}
