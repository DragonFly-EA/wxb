<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Search;
use App\Models\TravelInformatiom;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $search=Search::first();
        $search_fr=Search::where('language','fr')->first();
        $search_cn=Search::where('language','cn')->first();
        return view('admin.search', compact('search', 'search_fr', 'search_cn', 'menus'));
    }

}
