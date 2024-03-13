<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Career\CareerRequest;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){
        return view('careers.index');
    }
    public function store(CareerRequest $request){
        dd($request->all());
    }
}
