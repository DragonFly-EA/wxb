<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sustainability;
use Faker\Core\File;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class SustainabilityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $sustainability=Sustainability::first();
        $sustainability_fr=Sustainability::where('language','fr')->first();
        $sustainability_cn=Sustainability::where('language','cn')->first();
        Return view('admin.sustainability',compact('sustainability','sustainability_fr','sustainability_cn' ));

    }

    public function update (Request $request)
    {
        $sustainability=Sustainability::find($request->id);

        if($request->hasFile('image1')){
            $image=request('image1')==null?$sustainability->image1:request('image1')->store('sustainability, public');
            $sustainability->content1=$request->content1;
            $sustainability->content2=$request->content2;
            $sustainability->image1=$image;
        }
        else{
            $sustainability->content1=$request->content1;
            $sustainability->content2=$request->content2;
        }
        $sustainability->push();
        toast('Successfully Updated Sustainability Page','success','top-right');
        return redirect()->back();
    }


}
