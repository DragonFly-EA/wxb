<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Accessbility;
use Illuminate\Http\Request;

class AccessibilityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $accessibility = Accessbility::first();
        $accessibility_fr = Accessbility::where('language', 'fr')->first();
        $accessibility_cn = Accessbility::where('language', 'cn')->first();
        return view('admin.accessibility', compact('accessibility', 'accessibility_fr', 'accessibility_cn'));
    }

    public function update(Request $request)
    {
        $accessibility = Accessbility::find($request->id);
        if ($request->hasFile('banner_1')) {
            $banners = request('banner_1') == null ? $accessibility->banner : request('banner_1')->store('about', 'public');
            $accessibility->banner = $banners;
            $accessibility->title = $request->title_1;
            $accessibility->content = $request->content_1;
        } else {
            $accessibility->title = $request->title_1;
            $accessibility->content = $request->content_1;
        }
        $accessibility->push();
        toast('Successfully Updated About Page', 'success', 'top-right');
        return redirect()->back();
    }
}
