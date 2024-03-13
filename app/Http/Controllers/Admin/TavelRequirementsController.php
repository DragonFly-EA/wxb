<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\TravelRequirements;
use App\Models\Wifi;
use Illuminate\Http\Request;

class TavelRequirementsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $travelRequirements=TravelRequirements::first();
        $travelRequirements_fr=TravelRequirements::where('language','fr')->first();
        $travelRequirements_cn=TravelRequirements::where('language','cn')->first();
        return view('admin.travel-requirements', compact('travelRequirements', 'travelRequirements_fr', 'travelRequirements_cn', 'menus'));
    }

}
