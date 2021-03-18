<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DashprovinceController extends Controller
{  
    function dashboardperson_province(Request $request)
    {
        if (session()->has('LogedUser')) {
        $data = User::where('id','=',session('LogedUser'))->first();
        }

        $perp = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->count();
        $assetsp = DB::table('assets')
         ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
        ->count();
        $assetbuildingsp = DB::table('assetbuildings')
            ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
        ->count();
        $chaingmaip = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',50)
        ->count();
        $lamphoonp = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',51)
        ->count();
        $lampangp = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',52)
        ->count();
        $lamphoonp = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',51)
        ->count();
        $praep = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',54)
        ->count();
        $nanp = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',55)
        ->count();
        $payouap = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',56)
        ->count();
        $chaingrayp = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',57)
        ->count();
        $maehongsonp = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',58)
        ->count();

        $hos_person = DB::table('persons')
        // ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        // ->where('hospcode.chwpart','=',50)
        // ->where('HOSPCODE','=',$hoscode)
        ->get();

        return view('backend/dashboardperson_province',[
            'hos_persons'=>$hos_person,
            'data'=>$data,'perp'=>$perp,'assetsp'=>$assetsp,'assetbuildingsp'=>$assetbuildingsp,
            'chaingmaip'=>$chaingmaip, 'lampangp'=>$lampangp, 'lamphoonp'=>$lamphoonp,'praep'=>$praep,'nanp'=>$nanp,
            'payouap'=>$payouap, 'chaingrayp'=>$chaingrayp,'maehongsonp'=>$maehongsonp,            
        ]);
    }

    function person_province_only(Request $request,$hoscode)
    {
       
        $chaingmaip = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',50)
        ->count();
        $lamphoonp = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',51)
        ->count();
        $lampangp = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',52)
        ->count();
        $lamphoonp = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',51)
        ->count();
        $praep = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',54)
        ->count();
        $nanp = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',55)
        ->count();
        $payouap = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',56)
        ->count();
        $chaingrayp = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',57)
        ->count();
        $maehongsonp = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',58)
        ->count();

        $hos_person = DB::table('persons')
        // ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        // ->where('hospcode.chwpart','=',50)
        ->where('HOSPCODE','=',$hoscode)
        ->get();
        
        return view('backend/person_province_only',[
            'hos_persons'=>$hos_person,
            'data'=>$data,'perp'=>$perp,'assetsp'=>$assetsp,'assetbuildingsp'=>$assetbuildingsp,
            'chaingmaip'=>$chaingmaip, 'lampangp'=>$lampangp, 'lamphoonp'=>$lamphoonp,'praep'=>$praep,'nanp'=>$nanp,
            'payouap'=>$payouap, 'chaingrayp'=>$chaingrayp,'maehongsonp'=>$maehongsonp,            
        ]);
    }

}
