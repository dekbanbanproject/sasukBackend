<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
date_default_timezone_set("Asia/Bangkok");

class FontController extends Controller
{
    public function contact(Request $request)
    {      
      return view('fontend/contact');
    }
    public function index(Request $request)
    {      
      return view('fontend/blog/index');
    }
}
