<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Fleet\FleetRequest;
use App\Http\Requests\Fleet\UpdateFleetRequest;
use App\Models\Fleet;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class FleetController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $fleets = Fleet::where('language','en')->orderBy('id')->get();
        $fleets_fr = Fleet::where('language','fr')->orderBy('id')->get();
        $fleets_cn = Fleet::where('language','cn')->orderBy('id')->get();
        return view('fleet.index', compact('fleets','fleets_cn','fleets_fr'));
    }

    public function store(FleetRequest $request)
    {
        try{
            DB::beginTransaction();
            $fleet=new Fleet();
            if($request->hasFile('image'))
            {
                $image = request('image')== null ? "":request('image')->store('fleets','public');
                $fleet->title = $request->title;
                $fleet->image=$image;
                $fleet->title_1 = $request->title_1;
                $fleet->input_1 = $request->input_1;
                $fleet->title_2 = $request->title_2;
                $fleet->input_2 = $request->input_2;
                $fleet->content = $request->contents;
                $fleet->description = $request->description;
            }
            else{
                $fleet->title = $request->title;
                $fleet->title_1 = $request->title_1;
                $fleet->input_1 = $request->input_1;
                $fleet->title_2 = $request->title_2;
                $fleet->input_2 = $request->input_2;
                $fleet->content = $request->contents;
                $fleet->description = $request->description;
            }
            $fleet->save();
            DB::commit();
        }catch (\Exception $e){
            DB::rollBack();
            return back()->withErrors($e->getMessage());
        }
        $request->session()->flash('alert-success','Fleet added Successfully');
        return back();
    }
    public function update(UpdateFleetRequest $request)
    {
        try{
            DB::beginTransaction();
            $fleet=Fleet::find($request->id);
            if($request->hasFile('image')){
                $image = request('image')== null ? "":request('image')->store('fleets','public');
                $fleet->title = $request->title;
                $fleet->image=$image;
                $fleet->title_1 = $request->title_1;
                $fleet->input_1 = $request->input_1;
                $fleet->title_2 = $request->title_2;
                $fleet->input_2 = $request->input_2;
                $fleet->content = $request->contents;
                $fleet->description = $request->description;
            }
            else{
                $fleet->title = $request->title;
                $fleet->title_1 = $request->title_1;
                $fleet->input_1 = $request->input_1;
                $fleet->title_2 = $request->title_2;
                $fleet->input_2 = $request->input_2;
                $fleet->content = $request->contents;
                $fleet->description = $request->description;
            }
            $fleet->push();
            DB::commit();
        }catch (\Exception $e)
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage());
        }
        $request->session()->flash('alert-success','Fleet added Successfully');
        return back();
    }
    public function delete($id)
    {
        try {
            $fleet = Fleet::findOrFail($id);
            $fleet->delete();
            return response()->json(['message' => 'Fleet deleted successfully']);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['error' => 'Fleet not found'], 404);
        } catch (\Exception $e) {
            // Handle other exceptions if needed
            return response()->json(['error' => 'Failed to delete fleet'], 500);
        }
    }


}
