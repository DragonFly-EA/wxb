<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $about = About::first();
        $about_fr = About::where('language','fr')->first();
        $about_cn = About::where('language','cn')->first();
        ActivityController::store('views about section');
        return view('admin.about',compact('about','about_cn','about_fr'));
    }
    public function update(Request $request)
    {
        $about = About::find($request->id);
        if($request->hasFile('banner') || $request->hasFile('banner_2') || $request->hasFile('icon_1') || $request->hasFile('icon_2'))
        {
            $banner = request('banner')==null ? $about->banner: request('banner')->store('about','public');
            $banner_2 = request('banner_2') == null? $about->banner_2:request('banner_2')->store('about','public');
            $icon_1 = request('icon_1')== null ? $about->icon_1 :request('icon_1')->store('about','public');
            $icon_2 = request('icon_2')== null ? $about->icon_2 :request('icon_2')->store('about','public');
            $about->title = $request->title;
            $about->content = $request->content_1;
            $about->title_2 = $request->title_2;
            $about->content_1 = $request->content_2;
            $about->content_2 = $request->content_3;
            $about->banner = $banner;
            $about->banner_2 = $banner_2;
            $about->icon_1 = $icon_1;
            $about->icon_2 = $icon_2;
            $about->language = $request->language;
        }
        else
        {
            $about->title = $request->title;
            $about->content = $request->content_1;
            $about->title_2 = $request->title_2;
            $about->content_1 = $request->content_2;
            $about->language = $request->language;
            $about->content_2 = $request->content_3;
        }
        $about->push();
        ActivityController::store('updated about page for'.$request->language);
        toast('Successfully Updated About Page','success','top-right');
        return redirect()->back();
    }
}
