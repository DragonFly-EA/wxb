<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SingleFleetController extends Controller
{
    public function index(){
        return view('cms.single-fleet');

    }
}
