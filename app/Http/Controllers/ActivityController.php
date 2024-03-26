<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    //
    public static function store($activity)
    {
        $activity_log = new Activity();
        $activity_log->user_id = Auth::user()->id;
        $activity_log->activity = $activity;
        $activity_log->save();
    }
}
