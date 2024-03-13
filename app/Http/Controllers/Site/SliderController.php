<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\SliderRequest;
use App\Models\Slider;

class SliderController extends Controller
{
    //
    public function index(){
        $sliders = Slider::where('language','en')->where('archive',false)->get();
        $sliders_fr = Slider::where('language','fr')->where('archive',false)->get();
        $sliders_cn = Slider::where('language','cn')->where('archive',false)->get();
        return view('sliders.index',compact('sliders','sliders_fr','sliders_cn'));
    }
    public function store(SliderRequest $request){
        $sliders = new Slider();
        if($request->hasFile('image'))
        {
            $image = request('image')== null ? "":request('image')->store('sliders','public');
            $sliders->title = $request->title;
            $sliders->url = $request->url;
            $sliders->position = $request->position;
            $sliders->image = $image;
            $sliders->description = $request->description;
        }
        else{
            $sliders->title = $request->title;
            $sliders->url = $request->url;
            $sliders->position = $request->position;
            $sliders->description = $request->description;
        }
        $sliders->save();
        return response()->json(['status'=>'success','message'=>'Successfully Added A Slider']);
    }
    public function update(SliderRequest $request,$id){
        $sliders = Slider::find($id);
        if($request->hasFile('image'))
        {

            $image = request('image')== null ? $sliders->image:request('image')->store('sliders','public');
            $sliders->title = $request->title;
            $sliders->url = $request->url;
            $sliders->position = $request->position;
            $sliders->image = $image;
            $sliders->description = $request->description;
        }
        else{
            $sliders->title = $request->title;
            $sliders->url = $request->url;
            $sliders->position = $request->position;
            $sliders->description = $request->description;
        }
        $sliders->push();
        return response()->json(['status'=>'success','message'=>'Successfully Added A Slider']);
    }


    public function delete($id)
    {
        try {
            $slider = Slider::findOrFail($id);
            $slider->delete();
            return response()->json(['message' => 'Slider deleted successfully']);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => 'Slider not found'], 404);
        } catch (\Exception $e) {
            // Handle other exceptions if needed
            return response()->json(['error' => 'Failed to delete slider'], 500);
        }
    }



}
