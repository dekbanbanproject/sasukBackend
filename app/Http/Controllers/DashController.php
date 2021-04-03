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
        return view('backend/layout/dashboard/indexdh',[
            'data'=>$data,
        ]);
    }

    // function dashboardperson(Request $request)
    // {
    //     if (session()->has('LogedUser')) {
    //     $data = User::where('id','=',session('LogedUser'))->first();
    //     }
    //     return view('backend/dashboardperson',[
    //         'hos_per_chiangmais'=>$hos_per_chiangmai,
    //         ]);
    //     }
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

        $hos_per_chiangmai = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',50)
        ->first();
        $hos_per_lamphoon = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',51)
        ->first();
        $hos_per_lampang = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',52)
        ->first();
        
        $hos_per_prae = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',54)
        ->first();
        $hos_per_nan = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',55)
        ->first();
        $hos_per_payoua = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',56)
        ->first();
        $hos_per_chaingray= DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',57)
        ->first();
        $hos_per_maehongson= DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',58)
        ->first();

        $chaingmai = DB::table('persons')
    ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    ->where('hospcode.chwpart','=',50)
    ->count();
    $maxch = 10000;
    $perchaingmaicen = $chaingmai * 100 / $maxch;

    $lamphoon = DB::table('persons')
    ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    ->where('hospcode.chwpart','=',51)
    ->count();
    $maxch = 10000;
    $perlamphooncen = $lamphoon * 100 / $maxch;

    $lampang = DB::table('persons')
    ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    ->where('hospcode.chwpart','=',52)
    ->count();
    $maxch = 10000;
    $perlampangcen = $lampang * 100 / $maxch;
    
    $prae = DB::table('persons')
    ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    ->where('hospcode.chwpart','=',54)
    ->count();
    $maxch = 10000;
    $perpraecen = $prae * 100 / $maxch;

    $nan = DB::table('persons')
    ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    ->where('hospcode.chwpart','=',55)
    ->count();
    $maxch = 10000;
    $pernancen = $nan * 100 / $maxch;

    $payoua = DB::table('persons')
    ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    ->where('hospcode.chwpart','=',56)
    ->count();
    $maxch = 10000;
    $perpayouacen = $payoua * 100 / $maxch;

    $chaingray= DB::table('persons')
    ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    ->where('hospcode.chwpart','=',57)
    ->count();
    $maxch = 10000;
    $perchaingraycen = $chaingray * 100 / $maxch;

    $maehongson= DB::table('persons')
    ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    ->where('hospcode.chwpart','=',58)
    ->count();
    $maxch = 10000;
    $permaehongsoncen = $maehongson * 100 / $maxch;







        return view('backend/layout/dashboardperson',[


            
        'chaingmai'=>$chaingmai, 'lampang'=>$lampang, 'lamphoon'=>$lamphoon,'prae'=>$prae,'nan'=>$nan,
        'payoua'=>$payoua, 'chaingray'=>$chaingray,'maehongson'=>$maehongson,
        'perchaingmaicen'=>$perchaingmaicen, 'perlamphooncen'=>$perlamphooncen, 'perlampangcen'=>$perlampangcen,'perpraecen'=>$perpraecen,'pernancen'=>$pernancen,
        'perpayouacen'=>$perpayouacen, 'perchaingraycen'=>$perchaingraycen,'permaehongsoncen'=>$permaehongsoncen,

            'hos_per_chiangmais'=>$hos_per_chiangmai,'hos_per_lampangs'=>$hos_per_lampang,
            'hos_per_lamphoons'=>$hos_per_lamphoon,'hos_per_praes'=>$hos_per_prae,
            'hos_per_nans'=>$hos_per_nan,'hos_per_payouas'=>$hos_per_payoua,
            'hos_per_chaingrays'=>$hos_per_chaingray,'hos_per_maehongsons'=>$hos_per_maehongson,

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

    public static function checkhoscode($id)
    {
         $checkhoscode =  DB::table('persons')->where('HOSPCODE','=',$id) ->count();                       
         return $checkhoscode;
    }
    public static function pertypeA($id)
    {
         $pertypeA =  DB::table('persons')->where('HOSPCODE','=',$id)->where('HR_PERSON_TYPE_ID','=',1)->count();                       
         return $pertypeA;
    }
    public static function pertypeB($id)
    {
         $pertypeB =  DB::table('persons')->where('HOSPCODE','=',$id)->where('HR_PERSON_TYPE_ID','=',2)->count();                       
         return $pertypeB;
    }
    public static function pertypeC($id)
    {
         $pertypeC =  DB::table('persons')->where('HOSPCODE','=',$id)->where('HR_PERSON_TYPE_ID','=',3)->count();                       
         return $pertypeC;
    }
    public static function pertypeD($id)
    {
         $pertypeD =  DB::table('persons')->where('HOSPCODE','=',$id)->where('HR_PERSON_TYPE_ID','=',4)->count();                       
         return $pertypeD;
    }
    public static function pertypeE($id)
    {
         $pertypeE =  DB::table('persons')->where('HOSPCODE','=',$id)->where('HR_PERSON_TYPE_ID','=',5)->count();                       
         return $pertypeE;
    }
    public static function pertypeF($id)
    {
         $pertypeF =  DB::table('persons')->where('HOSPCODE','=',$id)->where('HR_PERSON_TYPE_ID','=',6)->count();                       
         return $pertypeF;
    }
    public static function pertypeH($id)
    {
         $pertypeH =  DB::table('persons')->where('HOSPCODE','=',$id)->where('HR_PERSON_TYPE_ID','>',6)->count();                       
         return $pertypeH;
    }
    public static function pertypeG($id)
    {
         $pertypeG =  DB::table('persons')->where('HOSPCODE','=',$id)->where('HR_PERSON_TYPE_ID','=',NULL)->count();                       
         return $pertypeG;
    }
    public static function checkpro($id)
    {
        $chw = DB::table('hospcode')->first();

         $checkpro =  DB::table('persons')
                            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
                            ->where('persons.HOSPCODE','=',$id)
                            ->where('persons.hospcode','=',$chw->hospcode)
                            ->count();                       
         return $checkpro;
    }

    public static function positionA($id)
    {
         $positionA =  DB::table('persons')->where('HOSPCODE','=',$id)->where('HR_POSITION_ID','=',24)->count();                       
         return $positionA;
    }
    public static function positionB($id)
    {
         $positionB =  DB::table('persons')->where('HOSPCODE','=',$id)->where('HR_POSITION_ID','=',21)->count();                       
         return $positionB;
    }
    public static function positionC($id)
    {
         $positionC =  DB::table('persons')->where('HOSPCODE','=',$id)->where('HR_POSITION_ID','=',23)->count();                       
         return $positionC;
    }
    public static function positionD($id)
    {
         $positionD =  DB::table('persons')->where('HOSPCODE','=',$id)->where('HR_POSITION_ID','=',7)->count();                       
         return $positionD;
    }
    public static function positionE($id)
    {
         $positionE =  DB::table('persons')->where('HOSPCODE','=',$id)->where('HR_POSITION_ID','=',30)->count();                       
         return $positionE;
    }
    public static function positionF($id)
    {
         $positionF =  DB::table('persons')->where('HOSPCODE','=',$id)->where('HR_POSITION_ID','=',3)->count();                       
         return $positionF;
    }
    public static function positionG($id)
    {
         $positionG =  DB::table('persons')->where('HOSPCODE','=',$id)->where('HR_POSITION_ID','=',26)->count();                       
         return $positionG;
    }
    public static function positionH($id)
    {
         $positionH =  DB::table('persons')->where('HOSPCODE','=',$id)->where('HR_POSITION_ID','=',NULL)->count();                       
         return $positionH;
    }
    // public static function positionI($id)
    // {
    //      $positionI =  DB::table('persons')->where('HOSPCODE','=',$id)->where('HR_POSITION_ID','=',21)->count();                       
    //      return $positionI;
    // }
    // public static function positionJ($id)
    // {
    //      $positionJ =  DB::table('persons')->where('HOSPCODE','=',$id)->where('HR_POSITION_ID','=',21)->count();                       
    //      return $positionJ;
    // }



    public function personprovinceonly (Request $request,$provincecode)
    {
        if (session()->has('LogedUser')) {
            $data = User::where('id','=',session('LogedUser'))->first();
            }

            $hos_per_province = DB::table('persons')
                ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
                ->where('hospcode.chwpart','=',$provincecode)
            ->first();
       
            $hos_province = DB::table('persons')
            ->select('hospcode.chwpart','persons.HOSPCODE','persons.HOS_NAME','hospcode.province_name')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',$provincecode)
            ->groupBy('hospcode.chwpart','persons.HOSPCODE','persons.HOS_NAME','hospcode.province_name')
            ->get();

            $hoscode_count = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',$provincecode)
            // ->groupBy('persons.HOSPCODE')
            // ->count('persons.HOSPCODE');
            ->count('hospcode.hospcode');
            // ->sum('hospcode.hospcode');
            // ->first();

            $hos_provincecount = DB::table('persons')
                ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
                ->where('hospcode.chwpart','=',$provincecode)
                // ->where('persons.HOSPCODE','=',$hos_province->HOSPCODE)
                ->groupBy('persons.HOSPCODE')
                ->count();

                
          

            /////////////////////////////////////////////

        $chaingmaipgt = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',50)
        ->get();
        $lamphoonpgt = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',51)
        ->get();
        $lampangpgt = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',52)
        ->get();
        $lamphoonpgt = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',51)
        ->get();
        $praepgt = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',54)
        ->get();
        $nanpgt = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',55)
        ->get();
        $payouapgt = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',56)
        ->get();
        $chaingraypgt = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',57)
        ->get();
        $maehongsonpgt = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
            ->where('hospcode.chwpart','=',58)
        ->get();

        $chaingmai = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',50)
        ->count();
        $maxch = 10000;
        $perchaingmaicen = $chaingmai * 100 / $maxch;
    
        $lamphoon = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',51)
        ->count();
        $maxch = 10000;
        $perlamphooncen = $lamphoon * 100 / $maxch;
    
        $lampang = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',52)
        ->count();
        $maxch = 10000;
        $perlampangcen = $lampang * 100 / $maxch;
        
        $prae = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',54)
        ->count();
        $maxch = 10000;
        $perpraecen = $prae * 100 / $maxch;
    
        $nan = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',55)
        ->count();
        $maxch = 10000;
        $pernancen = $nan * 100 / $maxch;
    
        $payoua = DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',56)
        ->count();
        $maxch = 10000;
        $perpayouacen = $payoua * 100 / $maxch;
    
        $chaingray= DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',57)
        ->count();
        $maxch = 10000;
        $perchaingraycen = $chaingray * 100 / $maxch;
    
        $maehongson= DB::table('persons')
        ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
        ->where('hospcode.chwpart','=',58)
        ->count();
        $maxch = 10000;
        $permaehongsoncen = $maehongson * 100 / $maxch;

        $pertype_A = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')->where('hospcode.chwpart','=',$provincecode)
            ->where('HR_PERSON_TYPE_ID','=',1)->count(); 
       
        $pertype_B = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')->where('hospcode.chwpart','=',$provincecode)
            ->where('HR_PERSON_TYPE_ID','=',2)->count(); 
      
        $pertype_C = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')->where('hospcode.chwpart','=',$provincecode)
            ->where('HR_PERSON_TYPE_ID','=',3)->count(); 

        $pertype_D = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')->where('hospcode.chwpart','=',$provincecode)
           ->where('HR_PERSON_TYPE_ID','=',4)->count(); 

        $pertype_E = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')->where('hospcode.chwpart','=',$provincecode)
            ->where('HR_PERSON_TYPE_ID','=',5)->count(); 

        $pertype_F = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')->where('hospcode.chwpart','=',$provincecode)
            ->where('HR_PERSON_TYPE_ID','=',6)->count(); 

        $pertype_G = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')->where('hospcode.chwpart','=',$provincecode)
            ->where('HR_PERSON_TYPE_ID','>',6)->count(); 
        $pertype_H = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')->where('hospcode.chwpart','=',$provincecode)
            ->where('HR_PERSON_TYPE_ID','=',NULL)->count(); 


        $perposition_A = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')->where('hospcode.chwpart','=',$provincecode)
            ->where('persons.HR_POSITION_ID','=',24)
        ->count();
        $perposition_B = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')->where('hospcode.chwpart','=',$provincecode)
            ->where('persons.HR_POSITION_ID','=',21)
        ->count();
        $perposition_C = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')->where('hospcode.chwpart','=',$provincecode)
            ->where('persons.HR_POSITION_ID','=',23)
        ->count();
        $perposition_D = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')->where('hospcode.chwpart','=',$provincecode)
            ->where('persons.HR_POSITION_ID','=',7)
        ->count();
        $perposition_E = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')->where('hospcode.chwpart','=',$provincecode)
            ->where('persons.HR_POSITION_ID','=',30)
        ->count();
        $perposition_F = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')->where('hospcode.chwpart','=',$provincecode)
            ->where('persons.HR_POSITION_ID','=',3)
        ->count();
        $perposition_G = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')->where('hospcode.chwpart','=',$provincecode)
            ->where('persons.HR_POSITION_ID','=',26)
        ->count();

        $perposition_6 = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')->where('hospcode.chwpart','=',$provincecode)
            ->where('persons.HR_POSITION_ID','=',6)
        ->count();
        $perposition_22 = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')->where('hospcode.chwpart','=',$provincecode)
            ->where('persons.HR_POSITION_ID','=',22)
        ->count();
        $perposition_25 = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')->where('hospcode.chwpart','=',$provincecode)
            ->where('persons.HR_POSITION_ID','=',25)
        ->count();
        $perposition_27 = DB::table('persons')
            ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')->where('hospcode.chwpart','=',$provincecode)
            ->where('persons.HR_POSITION_ID','=',27)
        ->count();



        return view('backend/layout/dashboardperson_only',[

            'pertype_A'=>$pertype_A,'pertype_B'=>$pertype_B,'pertype_C'=>$pertype_C,'pertype_H'=>$pertype_H,
            'pertype_D'=>$pertype_D,'pertype_E'=>$pertype_E,'pertype_F'=>$pertype_F,'pertype_G'=>$pertype_G,
            'perposition_6'=>$perposition_6,'perposition_22'=>$perposition_22,'perposition_25'=>$perposition_25,'perposition_27'=>$perposition_27,

            'perposition_A'=>$perposition_A,'perposition_B'=>$perposition_B,'perposition_C'=>$perposition_C,
            'perposition_D'=>$perposition_D,'perposition_E'=>$perposition_E,'perposition_F'=>$perposition_F,'perposition_G'=>$perposition_G,

            'hos_per_province'=>$hos_per_province,'hos_province'=>$hos_province,'hos_provincecount'=>$hos_provincecount,'hoscode_count'=>$hoscode_count,
            // 'countcheck'=>$countcheck,

            'chaingmai'=>$chaingmai, 'lampang'=>$lampang, 'lamphoon'=>$lamphoon,'prae'=>$prae,'nan'=>$nan,
            'payoua'=>$payoua, 'chaingray'=>$chaingray,'maehongson'=>$maehongson,
            'perchaingmaicen'=>$perchaingmaicen, 'perlamphooncen'=>$perlamphooncen, 'perlampangcen'=>$perlampangcen,'perpraecen'=>$perpraecen,'pernancen'=>$pernancen,
            'perpayouacen'=>$perpayouacen, 'perchaingraycen'=>$perchaingraycen,'permaehongsoncen'=>$permaehongsoncen,
            
            'data'=>$data,
            'chaingmaipgt'=>$chaingmaipgt, 'lampangpgt'=>$lampangpgt, 'lamphoonpgt'=>$lamphoonpgt,'praepgt'=>$praepgt,'nanpgt'=>$nanpgt,
            'payouapgt'=>$payouapgt, 'chaingraypgt'=>$chaingraypgt,'maehongsonpgt'=>$maehongsonpgt, 
        ]);
    }

}
