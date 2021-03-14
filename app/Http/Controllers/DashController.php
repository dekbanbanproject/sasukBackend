<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DashController extends Controller
{
    function indexdh(Request $request)
    {
        if (session()->has('LogedUser')) {
            $data = User::where('id','=',session('LogedUser'))->first();
         }
        return view('backend/dashboard/indexdh',[
            'data'=>$data,
        ]);
    }

    function dashboardperson(Request $request)
    {
        if (session()->has('LogedUser')) {
        $data = User::where('id','=',session('LogedUser'))->first();
        }

        $per = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->count();
        $assets = DB::table('assets')
         ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
        ->count();
        $assetbuildings = DB::table('assetbuildings')
            ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
        ->count();
        $chaingmai = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',50)
        ->count();
        $lamphoon = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',51)
        ->count();
        $lampang = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',52)
        ->count();
        $lamphoon = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',51)
        ->count();
        $prae = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',54)
        ->count();
        $nan = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',55)
        ->count();
        $payoua = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',56)
        ->count();
        $chaingray= DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',57)
        ->count();
        $maehongson= DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',58)
        ->count();

        
        $chaingmaikind = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',50)
            ->where('persons.HR_PERSON_TYPE_NAME','=','ข้าราชการ')
        ->count();
        $lamphoonkind = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',51)
            ->where('persons.HR_PERSON_TYPE_NAME','=','ข้าราชการ')
        ->count();
        $lampangkind = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',52)
            ->where('persons.HR_PERSON_TYPE_NAME','=','ข้าราชการ')
        ->count();
        $lamphoonkind = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',51)
            ->where('persons.HR_PERSON_TYPE_NAME','=','ข้าราชการ')
        ->count();
        $praekind= DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',54)
            ->where('persons.HR_PERSON_TYPE_NAME','=','ข้าราชการ')
        ->count();
        $nankind = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',55)
            ->where('persons.HR_PERSON_TYPE_NAME','=','ข้าราชการ')
        ->count();
        $payouakind = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',56)
            ->where('persons.HR_PERSON_TYPE_NAME','=','ข้าราชการ')
        ->count();
        $chaingraykind= DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',57)
            ->where('persons.HR_PERSON_TYPE_NAME','=','ข้าราชการ')
        ->count();
        $maehongsonkind= DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',58)
            ->where('persons.HR_PERSON_TYPE_NAME','=','ข้าราชการ')
        ->count();


    $chaingmaikindsuang = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',50)
        ->where('persons.HR_PERSON_TYPE_NAME','=','พนักงานกระทรวงสาธารณสุข')
    ->count();
    $lamphoonkindsuang = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',51)
        ->where('persons.HR_PERSON_TYPE_NAME','=','พนักงานกระทรวงสาธารณสุข')
    ->count();
    $lampangkindsuang = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',52)
        ->where('persons.HR_PERSON_TYPE_NAME','=','พนักงานกระทรวงสาธารณสุข')
    ->count();
    $lamphoonkindsuang = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',51)
        ->where('persons.HR_PERSON_TYPE_NAME','=','พนักงานกระทรวงสาธารณสุข')
    ->count();
    $praekindsuang= DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',54)
        ->where('persons.HR_PERSON_TYPE_NAME','=','พนักงานกระทรวงสาธารณสุข')
    ->count();
    $nankindsuang = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',55)
        ->where('persons.HR_PERSON_TYPE_NAME','=','พนักงานกระทรวงสาธารณสุข')
    ->count();
    $payouakindsuang = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',56)
        ->where('persons.HR_PERSON_TYPE_NAME','=','พนักงานกระทรวงสาธารณสุข')
    ->count();
    $chaingraykindsuang = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',57)
        ->where('persons.HR_PERSON_TYPE_NAME','=','พนักงานกระทรวงสาธารณสุข')
    ->count();
    $maehongsonkindsuang = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',58)
        ->where('persons.HR_PERSON_TYPE_NAME','=','พนักงานกระทรวงสาธารณสุข')
    ->count();


    $chaingmaikindjang = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',50)
        ->where('persons.HR_PERSON_TYPE_NAME','=','ลูกจ้างรายวัน')
    ->count();
    $lamphoonkindjang = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',51)
        ->where('persons.HR_PERSON_TYPE_NAME','=','ลูกจ้างรายวัน')
    ->count();
    $lampangkindjang = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',52)
        ->where('persons.HR_PERSON_TYPE_NAME','=','ลูกจ้างรายวัน')
    ->count();
    $lamphoonkindjang = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',51)
        ->where('persons.HR_PERSON_TYPE_NAME','=','ลูกจ้างรายวัน')
    ->count();
    $praekindjang = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',54)
        ->where('persons.HR_PERSON_TYPE_NAME','=','ลูกจ้างรายวัน')
    ->count();
    $nankindjang = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',55)
        ->where('persons.HR_PERSON_TYPE_NAME','=','ลูกจ้างรายวัน')
    ->count();
    $payouakindjang = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',56)
        ->where('persons.HR_PERSON_TYPE_NAME','=','ลูกจ้างรายวัน')
    ->count();
    $chaingraykindjang = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',57)
        ->where('persons.HR_PERSON_TYPE_NAME','=','ลูกจ้างรายวัน')
    ->count();
    $maehongsonkindjang = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',58)
        ->where('persons.HR_PERSON_TYPE_NAME','=','ลูกจ้างรายวัน')
    ->count();

    
    $chaingmaikindjangjom = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',50)
        ->where('persons.HR_PERSON_TYPE_NAME','=','ลูกจ้างประจำ')
    ->count();
    $lamphoonkindjangjom = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',51)
        ->where('persons.HR_PERSON_TYPE_NAME','=','ลูกจ้างประจำ')
    ->count();
    $lampangkindjangjom = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',52)
        ->where('persons.HR_PERSON_TYPE_NAME','=','ลูกจ้างประจำ')
    ->count();
    $lamphoonkindjangjom = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',51)
        ->where('persons.HR_PERSON_TYPE_NAME','=','ลูกจ้างประจำ')
    ->count();
    $praekindjangjom = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',54)
        ->where('persons.HR_PERSON_TYPE_NAME','=','ลูกจ้างประจำ')
    ->count();
    $nankindjangjom = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',55)
        ->where('persons.HR_PERSON_TYPE_NAME','=','ลูกจ้างประจำ')
    ->count();
    $payouakindjangjom = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',56)
        ->where('persons.HR_PERSON_TYPE_NAME','=','ลูกจ้างประจำ')
    ->count();
    $chaingraykindjangjom = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',57)
        ->where('persons.HR_PERSON_TYPE_NAME','=','ลูกจ้างประจำ')
    ->count();
    $maehongsonkindjangjom = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',58)
        ->where('persons.HR_PERSON_TYPE_NAME','=','ลูกจ้างประจำ')
    ->count();


    $chaingmaikindkarn = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',50)
        ->where('persons.HR_PERSON_TYPE_NAME','=','พนักงานราชการ')
    ->count();
    $lamphoonkindkarn = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',51)
        ->where('persons.HR_PERSON_TYPE_NAME','=','พนักงานราชการ')
    ->count();
    $lampangkindkarn = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',52)
        ->where('persons.HR_PERSON_TYPE_NAME','=','พนักงานราชการ')
    ->count();
    $lamphoonkindkarn = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',51)
        ->where('persons.HR_PERSON_TYPE_NAME','=','พนักงานราชการ')
    ->count();
    $praekindkarn = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',54)
        ->where('persons.HR_PERSON_TYPE_NAME','=','พนักงานราชการ')
    ->count();
    $nankindkarn = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',55)
        ->where('persons.HR_PERSON_TYPE_NAME','=','พนักงานราชการ')
    ->count();
    $payouakindkarn = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',56)
        ->where('persons.HR_PERSON_TYPE_NAME','=','พนักงานราชการ')
    ->count();
    $chaingraykindkarn = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',57)
        ->where('persons.HR_PERSON_TYPE_NAME','=','พนักงานราชการ')
    ->count();
    $maehongsonkindkarn = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',58)
        ->where('persons.HR_PERSON_TYPE_NAME','=','พนักงานราชการ')
    ->count();

    $chaingmaikindnull = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',50)
        ->where('persons.HR_PERSON_TYPE_NAME','=',NULL)
    ->count();
    $lamphoonkindnull = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',51)
        ->where('persons.HR_PERSON_TYPE_NAME','=',NULL)
    ->count();
    $lampangkindnull = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',52)
        ->where('persons.HR_PERSON_TYPE_NAME','=',NULL)
    ->count();
    $lamphoonkindnull = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',51)
        ->where('persons.HR_PERSON_TYPE_NAME','=',NULL)
    ->count();
    $praekindnull = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',54)
        ->where('persons.HR_PERSON_TYPE_NAME','=',NULL)
    ->count();
    $nankindnull = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',55)
        ->where('persons.HR_PERSON_TYPE_NAME','=',NULL)
    ->count();
    $payouakindnull = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',56)
        ->where('persons.HR_PERSON_TYPE_NAME','=',NULL)
    ->count();
    $chaingraykindnull = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',57)
        ->where('persons.HR_PERSON_TYPE_NAME','=',NULL)
    ->count();
    $maehongsonkindnull= DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',58)
        ->where('persons.HR_PERSON_TYPE_NAME','=',NULL)
    ->count();

        return view('backend/dashboardperson',[
            'data'=>$data,'per'=>$per,'assets'=>$assets,'assetbuildings'=>$assetbuildings,
            'chaingmai'=>$chaingmai, 'lampang'=>$lampang, 'lamphoon'=>$lamphoon,'prae'=>$prae,'nan'=>$nan,
            'payoua'=>$payoua, 'chaingray'=>$chaingray,'maehongson'=>$maehongson,

            'chaingmaikind'=>$chaingmaikind, 'lampangkind'=>$lampangkind, 'lamphoonkind'=>$lamphoonkind,'praekind'=>$praekind,'nankind'=>$nankind,
            'payouakind'=>$payouakind, 'chaingraykind'=>$chaingraykind,'maehongsonkind'=>$maehongsonkind,

            'chaingmaikindsuang'=>$chaingmaikindsuang, 'lampangkindsuang'=>$lampangkindsuang, 'lamphoonkindsuang'=>$lamphoonkindsuang,'praekindsuang'=>$praekindsuang,'nankindsuang'=>$nankindsuang,
            'payouakindsuang'=>$payouakindsuang, 'chaingraykindsuang'=>$chaingraykindsuang,'maehongsonkindsuang'=>$maehongsonkindsuang,

            'chaingmaikindjang'=>$chaingmaikindjang, 'lampangkindjang'=>$lampangkindjang, 'lamphoonkindjang'=>$lamphoonkindjang,'praekindjang'=>$praekindjang,'nankindjang'=>$nankindjang,
            'payouakindjang'=>$payouakindjang, 'chaingraykindjang'=>$chaingraykindjang,'maehongsonkindjang'=>$maehongsonkindjang,

            'chaingmaikindjangjom'=>$chaingmaikindjangjom, 'lampangkindjangjom'=>$lampangkindjangjom, 'lamphoonkindjangjom'=>$lamphoonkindjangjom,'praekindjangjom'=>$praekindjangjom,'nankindjangjom'=>$nankindjangjom,
            'payouakindjangjom'=>$payouakindjangjom, 'chaingraykindjangjom'=>$chaingraykindjangjom,'maehongsonkindjangjom'=>$maehongsonkindjangjom,

            'chaingmaikindkarn'=>$chaingmaikindkarn, 'lampangkindkarn'=>$lampangkindkarn, 'lamphoonkindkarn'=>$lamphoonkindkarn,'praekindkarn'=>$praekindkarn,'nankindkarn'=>$nankindkarn,
            'payouakindkarn'=>$payouakindkarn, 'chaingraykindkarn'=>$chaingraykindkarn,'maehongsonkindkarn'=>$maehongsonkindkarn,

            'chaingmaikindnull'=>$chaingmaikindnull, 'lampangkindnull'=>$lampangkindnull, 'lamphoonkindnull'=>$lamphoonkindnull,'praekindnull'=>$praekindnull,'nankindnull'=>$nankindnull,
            'payouakindnull'=>$payouakindnull, 'chaingraykindnull'=>$chaingraykindnull,'maehongsonkindnull'=>$maehongsonkindnull,

        ]);
    }
}