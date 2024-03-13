<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\MenuRequest;
use App\Http\Requests\Menu\SubMenuRequest;
use App\Http\Requests\Menu\UpdateMenuRequest;
use App\Models\Menu;
use App\Models\Submenu;
use App\Models\SubMenuTitle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function index()
    {
        $menus = Menu::orderBy('id')->get();
        return view('menu.index', compact('menus'));
    }

    public function store(MenuRequest $request)
    {
        try {
            DB::beginTransaction();

            $menu = new Menu();
            $menu->name = $request->name;
            $menu->url = $request->url;
            $menu->language = $request->language;
            $menu->save();
            $iMax = count($request->sub_menu_title);
            for ($i=0; $i< $iMax; $i++)
            {
                $submenu = new SubMenuTitle();
                $submenu->menu_id = $menu->id;
                $submenu->language = $menu->language;
                $submenu->name = $request->sub_menu_title[$i];
                $submenu->save();
            }
            DB::commit();
            return response()->json(['status' => 'success', 'message' => 'Menu Saved Successfully'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            return response()->json($e->getMessage());
        }
    }

    public function update(UpdateMenuRequest $request)
    {
        try {
            DB::beginTransaction();
            $menu = Menu::findOrFail($request->id);
            $menu->name = $request->name;
            $menu->url = $request->url;
            $menu->push();
            DB::commit();
            return response()->json(['status' => 'success', 'message' => 'Menu Updated Successfully'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            return response(['error'=>'Something Went Wrong']);
        }
    }
    public function getMenuTitle($id)
    {
        $menu_titles = SubMenuTitle::where('menu_id',$id)->get();
        return response(['titles'=>$menu_titles]);
    }
    public function storeSubMenu(SubMenuRequest $request)
    {
        try{
            $menu = Menu::findOrFail($request->menu_id);
            DB::beginTransaction();
            $iMax = count($request->sub_menu_name);
            for ($i=0; $i< $iMax; $i++)
            {
                $sub_menu = new Submenu();
                $sub_menu->menu_id  = $request->menu_id;
                $sub_menu->language = $menu->language;
                $sub_menu->sub_menu_title_id  = $request->sub_menu_title_id;
                $sub_menu->name = $request->sub_menu_name[$i];
                //$sub_menu->url = $request->sub_menu_url[$i];
                $sub_menu->url = $menu->language ==='en'?$request->sub_menu_url[$i]: $menu->language.'/'.$request->sub_menu_url[$i];
                $sub_menu->external_link = $request->external_link[$i]=== "true"?true:false;
                $sub_menu->save();
            }
            DB::commit();
            if ($sub_menu)
            {
                return response()->json(['status' => 'success', 'message' => 'Menu Updated Successfully'], 200);
            }
        }
        catch (\Exception $e){
            DB::rollBack();
            Log::info($e->getMessage());
            return  response(['error'=>$e->getMessage()]);
        }
    }
}
