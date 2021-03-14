<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Category;
date_default_timezone_set("Asia/Bangkok");

class DashboardController extends Controller
{
    function dashboard(Request $request)
    {
        // return view('backend/dashboard');
    }
    

}
