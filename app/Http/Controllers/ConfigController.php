<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Category;
date_default_timezone_set("Asia/Bangkok");

class ConfigController extends Controller
{
    function config_category(Request $request)
    {
        if (session()->has('LogedUser')) {
            $data = User::where('id','=',session('LogedUser'))->first();
            // $data = [
            //     'UserInfo'=>$user
            // ];
        }
        $cat = Category::get();
        return view('backend/config/category', [
            'data'=>$data,
            'cat'=>$cat
        ]);
    }


}
