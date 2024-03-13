<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Search;
use App\Models\SearchTerm;
use App\Models\Sitemap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SearchController extends Controller
{
    public function index(){
        $search=Search::first();
        $terms = SearchTerm::orderBy('created_at','asc')->get();
        $menus = Menu::with('titles')->orderBy('id')->get();
        return view('cms.search', compact('search','menus','terms'));

    }
    public function french(){
        $search=Search::where('language','fr')->first();
        $menus = Menu::where('language', 'fr')-> with('titles')->orderBy('id')->get();
        return view('cms.french.search',compact('menus', 'search'));
    }
    public function chinese(){
        $search=Search::where('language','cn')->first();
        $menus = Menu::where('language', 'cn')-> with('titles')->orderBy('id')->get();
        return view('cms.chinese.search',compact('menus', 'search'));
    }
    public function search($search)
    {
        $tables = DB::select('SHOW TABLES');
        $data = [];
        foreach ($tables as $table) {
            $tableName = $table->{'Tables_in_' . env('DB_DATABASE')};
            // Get all columns of the current table
            $columns = Schema::getColumnListing($tableName);
            // Perform search across all columns
            $query = DB::table($tableName);
            foreach ($columns as $column) {
                $query->orWhere($column, 'LIKE', '%' . $search . '%');
            }
            $tableData = $query->get();
            $data[$tableName] = $tableData;
        }
        $this->trending($search);
        return response()->json($data);
    }
    private function trending($search)
    {
        $term = SearchTerm::where('term',$search)->first();
        if($term)
        {
            $term->increment('search_count');
        }
        else{
            SearchTerm::create([
                'term'=>$search,
                'search_count'=>1,
            ]);
        }
    }
}
