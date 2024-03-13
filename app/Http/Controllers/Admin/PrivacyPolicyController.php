<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\PrivacyPolicy;
use App\Models\TravelInformatiom;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $privacyPolicy=PrivacyPolicy::first();
        $privacyPolicy_fr=PrivacyPolicy::where('language','fr')->first();
        $privacyPolicy_cn=PrivacyPolicy::where('language','cn')->first();
        return view('admin.privacy-policy', compact('privacyPolicy', 'privacyPolicy_fr', 'privacyPolicy_cn', 'menus'));
    }
}
