<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Value\ValueRequest;
use App\Models\Value;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ValuesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $values = Value::where('language','en')->orderBy('id')->get();
        $values_fr = Value::where('language','fr')->orderBy('id')->get();
        $values_cn = Value::where('language','cn')->orderBy('id')->get();
        return view('values.index',compact('values','values_cn','values_fr'));
    }
    public function store(ValueRequest $request){
        try{
            DB::beginTransaction();
            $value = new Value();
            $value->title = $request->title;
            $value->content = $request->description;
            $value->icon = $request->icon;
            $value->save();
            DB::commit();
        }
        catch(Exception $e)
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage());
        }
        $request->session()->flash('alert-success','Value Successfully Saved');
        return back();
    }
    public function update(ValueRequest $request){
        try{
            DB::beginTransaction();
            $value = Value::findOrFail($request->id);
            $value->title = $request->title;
            $value->content = $request->description;
            $value->icon = $request->icon;
            $value->save();
            DB::commit();
        }
        catch(Exception $e)
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage());
        }
        $request->session()->flash('alert-success','Value Successfully Updated');
        return back();
    }
    public function delete(Request $request,$id)
    {
        try{
            DB::beginTransaction();
            Value::findOrFail($id)->delete();
            DB::commit();
        }
        catch (\Exception $e)
        {
            DB::rollBack();
            return back()->withErrors($e->getMessage());
        }
        $request->session()->flash('alert-success','Value Successfully Removed');
        return back();
    }
}
