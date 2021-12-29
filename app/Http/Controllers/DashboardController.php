<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class DashboardController extends Controller
{
    public function index(){
        $setting_data = Setting::latest('created_at')->first();
        return view('admin/dashboard/index',compact('setting_data'));
    }
}
