<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserAuthController extends Controller
{
   function login(){
       return view('auth.login');
   }
   function register(){
    return view('auth.register');
    }
    // function logout(Request $request){
    //     $request->session()->forget('id');
    //     $request->session()->forget('name');

    //     return view('auth.login');
    //     }
    function create(Request $request){

        // return $request->input();
        $request->validate([
            'name'=> 'required',
            'username'=> 'required',
            'password'=> 'required|min:5|max:12'

        ]);

        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->utype = 'USER';
        $user->img = '';
        $user->pr_id = '';
        $query = $user->save();

        if ($query) {
            return back()->with('success','ลงทะเบียนสำเร็จ');
        }else{
            return back()->with('fail','ลงทะเบียนไม่สำเร็จ');
        }
          
    }

    function check(Request $request){
            $request->validate([
                'username'=> 'required',
                'password'=> 'required|min:5|max:12'

            ]);
  

            $user = User::where('username','=', $request->username)->first();
            if ($user) {
                if (Hash::check($request->password, $user->password)) {
                    $request->session()->put('LogedUser',$user->id);
                    return redirect('backend_dashboard');
                }
            } else {
            return back()->with('fail','No account');
            } 
    }



    function personcount(Request $request)
    {
        if (session()->has('LogedUser')) {
        $data = User::where('id','=',session('LogedUser'))->first();
        }

        $resulttotal = DB::table('dc_hospital')->get();
        $total_poll_row = mysqli_num_rows($resulttotal);

        // $query = $conn->query("SELECT * FROM tblprogramming order by id asc");



        $As_chaingmai = DB::table('assets')
        ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
        ->where('hospcode.chwpart','=',50)
        ->count();

        $total = 10000;
        $open = round(($As_chaingmai / $total) * 100);
          
        $progress_bar_class = '';
        if($As_chaingmai >= 40)
        {
            $progress_bar_class = 'progress-bar-success';
        }
        else if($As_chaingmai >= 25 && $As_chaingmai < 40)
        {
            $progress_bar_class = 'progress-bar-info';
        }
        else if($As_chaingmai >= 10 && $As_chaingmai < 25)
        {
            $progress_bar_class = 'progress-bar-warning';
        }
        else
        {
            $progress_bar_class = 'progress-bar-danger';
        }

        $output ='
       
        
        
        
        ';
        echo $output;

      
    }



function backend_dashboard(Request $request)
{
    if (session()->has('LogedUser')) {
       $data = User::where('id','=',session('LogedUser'))->first();
    }

    // $per = DB::table('persons')
    // ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    // ->count();
    // $maxch = 50000;
    // $percen = $per * 100 / $maxch;

    // $assets = DB::table('assets')
    // ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    // ->count();
    // $maxch = 50000;
    // $assetscen = $assets * 100 / $maxch;

    // $assetbuildings = DB::table('assetbuildings')
    // ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    // ->count();
    // $maxch = 2000;
    // $assetbuildingscen = $assetbuildings * 100 / $maxch;

    // $hos = DB::table('persons')
    // ->select("HOSPCODE,COUNT(HOSPCODE)")
    // ->groupBy("HOSPCODE")
    // ->count();

 
    // $chaingmai = DB::table('persons')
    // ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    // ->where('hospcode.chwpart','=',50)
    // ->count();
    // $maxch = 10000;
    // $perchaingmaicen = $chaingmai * 100 / $maxch;

    // $lamphoon = DB::table('persons')
    // ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    // ->where('hospcode.chwpart','=',51)
    // ->count();
    // $maxch = 10000;
    // $perlamphooncen = $lamphoon * 100 / $maxch;

    // $lampang = DB::table('persons')
    // ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    // ->where('hospcode.chwpart','=',52)
    // ->count();
    // $maxch = 10000;
    // $perlampangcen = $lampang * 100 / $maxch;
    
    // $prae = DB::table('persons')
    // ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    // ->where('hospcode.chwpart','=',54)
    // ->count();
    // $maxch = 10000;
    // $perpraecen = $prae * 100 / $maxch;

    // $nan = DB::table('persons')
    // ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    // ->where('hospcode.chwpart','=',55)
    // ->count();
    // $maxch = 10000;
    // $pernancen = $nan * 100 / $maxch;

    // $payoua = DB::table('persons')
    // ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    // ->where('hospcode.chwpart','=',56)
    // ->count();
    // $maxch = 10000;
    // $perpayouacen = $payoua * 100 / $maxch;

    // $chaingray= DB::table('persons')
    // ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    // ->where('hospcode.chwpart','=',57)
    // ->count();
    // $maxch = 10000;
    // $perchaingraycen = $chaingray * 100 / $maxch;

    // $maehongson= DB::table('persons')
    // ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    // ->where('hospcode.chwpart','=',58)
    // ->count();
    // $maxch = 10000;
    // $permaehongsoncen = $maehongson * 100 / $maxch;
    // // $personchw= DB::table('persons')
    // // ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    // // ->where('hospcode.chwpart','=',58)
    // // ->count();
    // $As_chaingmai = DB::table('assets')
    // ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    // ->where('hospcode.chwpart','=',50)
    // ->count();
    // $maxch = 20000;
    // $As_chaingmaicen = $As_chaingmai * 100 / $maxch;

    // $As_lamphoon = DB::table('assets')
    // ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    // ->where('hospcode.chwpart','=',51)
    // ->count();
    // $maxch = 20000;
    // $As_lamphooncen = $As_lamphoon * 100 / $maxch;

    // $As_lampang = DB::table('assets')
    // ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    // ->where('hospcode.chwpart','=',52)
    // ->count();
    // $maxch = 20000;
    // $As_lampangcen = $As_lampang * 100 / $maxch;
   
    // $As_prae = DB::table('assets')
    // ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    // ->where('hospcode.chwpart','=',54)
    // ->count();
    // $maxch = 20000;
    // $As_praecen = $As_prae * 100 / $maxch;

    // $As_nan = DB::table('assets')
    // ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    // ->where('hospcode.chwpart','=',55)
    // ->count();
    // $maxch = 20000;
    // $As_nancen = $As_nan * 100 / $maxch;

    // $As_payoua = DB::table('assets')
    // ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    // ->where('hospcode.chwpart','=',56)
    // ->count();
    // $maxch = 20000;
    // $As_payouacen = $As_payoua * 100 / $maxch;

    // $As_chaingray= DB::table('assets')
    // ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    // ->where('hospcode.chwpart','=',57)
    // ->count();
    // $maxch = 20000;
    // $As_chaingraycen = $As_chaingray * 100 / $maxch;

    // $As_maehongson= DB::table('assets')
    // ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    // ->where('hospcode.chwpart','=',58)
    // ->count();
    // $maxch = 20000;
    // $As_maehongsoncen = $As_maehongson * 100 / $maxch;

    // ////////////////////////////////////////////////////////////////
    
    // $buil_chaingmai = DB::table('assetbuildings')
    // ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    // ->where('hospcode.chwpart','=',50)
    // ->count();
    // $maxch = 500;
    // $buil_chaingmaicen = $buil_chaingmai * 100 / $maxch;

    // $buil_lamphoon = DB::table('assetbuildings')
    // ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    // ->where('hospcode.chwpart','=',51)
    // ->count();
    // $maxch = 500;
    // $buil_lamphooncen = $buil_lamphoon * 100 / $maxch;

    // $buil_lampang = DB::table('assetbuildings')
    // ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    // ->where('hospcode.chwpart','=',52)
    // ->count();
    // $maxch = 500;
    // $buil_lampangcen = $buil_lampang * 100 / $maxch;
   
    // $buil_prae = DB::table('assetbuildings')
    // ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    // ->where('hospcode.chwpart','=',54)
    // ->count();
    // $maxch = 500;
    // $buil_praegcen = $buil_prae * 100 / $maxch;

    // $buil_nan = DB::table('assetbuildings')
    // ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    // ->where('hospcode.chwpart','=',55)
    // ->count();
    // $maxch = 500;
    // $buil_nangcen = $buil_nan * 100 / $maxch;
    
    // $buil_payoua = DB::table('assetbuildings')
    // ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    // ->where('hospcode.chwpart','=',56)
    // ->count();
    // $maxch = 500;
    // $buil_payouacen = $buil_payoua * 100 / $maxch;

    // $buil_chaingray= DB::table('assetbuildings')
    // ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    // ->where('hospcode.chwpart','=',57)
    // ->count();
    // $maxch = 500;
    // $buil_chaingraycen = $buil_chaingray * 100 / $maxch;

    // $buil_maehongson= DB::table('assetbuildings')
    // ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    // ->where('hospcode.chwpart','=',58)
    // ->count();
    // $maxch = 500;
    // $buil_maehongsoncen = $buil_maehongson * 100 / $maxch;

    $m_budget = date("m");

    $m_budget = date("m");
    if($m_budget>9){
    $yearbudget = date("Y")+544;
    }else{
    $yearbudget = date("Y")+543;
    }
    
    $year_id = $yearbudget;

    $year24 = $year_id - 540;  //2524
    $year23 = $year_id - 541;  //2523
    $year22 = $year_id - 542;  //2522
    $year21 = $year_id - 543;  //2521
    $year20 = $year_id - 544;  // 2520
    $year19 = $year_id - 545;  //2519

    $day =  date("y-m-d");
    // $year =  date("y-m-d");
    // $year = date("m");
    // $mont = date("m");
    $date = Carbon::now();

    $opdcount = DB::table('tb_opd')->count();
    $ipdcount = DB::table('tb_ipd')->count();

    $opdcountL = DB::table('tb_opd')->where('datescan','=',$day)->count();
    $ipdcountL = DB::table('tb_ipd')->where('datescan','=',$day)->count();

   

    $opd122 = DB::table('tb_opd')->where('datescan','like',$year22.'-01%')->sum('pages');
    $opd222 = DB::table('tb_opd')->where('datescan','like',$year22.'-02%')->sum('pages');
    $opd322 = DB::table('tb_opd')->where('datescan','like',$year22.'-03%')->sum('pages');
    $opd422 = DB::table('tb_opd')->where('datescan','like',$year22.'-04%')->sum('pages');
    $opd522 = DB::table('tb_opd')->where('datescan','like',$year22.'-05%')->sum('pages');
    $opd622 = DB::table('tb_opd')->where('datescan','like',$year22.'-06%')->sum('pages');
    $opd722 = DB::table('tb_opd')->where('datescan','like',$year22.'-07%')->sum('pages');
    $opd822 = DB::table('tb_opd')->where('datescan','like',$year22.'-08%')->sum('pages');
    $opd922 = DB::table('tb_opd')->where('datescan','like',$year22.'-09%')->sum('pages');
    $opd1022 = DB::table('tb_opd')->where('datescan','like',$year22.'-10%')->sum('pages');
    $opd1122 = DB::table('tb_opd')->where('datescan','like',$year22.'-11%')->sum('pages');
    $opd1222 = DB::table('tb_opd')->where('datescan','like',$year22.'-12%')->sum('pages');

    $opd1 = DB::table('tb_opd')->where('datescan','like',$year21.'-01%')->sum('pages');
    $opd2 = DB::table('tb_opd')->where('datescan','like',$year21.'-02%')->sum('pages');
    $opd3 = DB::table('tb_opd')->where('datescan','like',$year21.'-03%')->sum('pages');
    $opd4 = DB::table('tb_opd')->where('datescan','like',$year21.'-04%')->sum('pages');
    $opd5 = DB::table('tb_opd')->where('datescan','like',$year21.'-05%')->sum('pages');
    $opd6 = DB::table('tb_opd')->where('datescan','like',$year21.'-06%')->sum('pages');
    $opd7 = DB::table('tb_opd')->where('datescan','like',$year21.'-07%')->sum('pages');
    $opd8 = DB::table('tb_opd')->where('datescan','like',$year21.'-08%')->sum('pages');
    $opd9 = DB::table('tb_opd')->where('datescan','like',$year21.'-09%')->sum('pages');
    $opd10 = DB::table('tb_opd')->where('datescan','like',$year21.'-10%')->sum('pages');
    $opd11 = DB::table('tb_opd')->where('datescan','like',$year21.'-11%')->sum('pages');
    $opd12 = DB::table('tb_opd')->where('datescan','like',$year21.'-12%')->sum('pages');

    $opd11 = DB::table('tb_opd')->where('datescan','like',$year20.'-01%')->sum('pages');
    $opd21 = DB::table('tb_opd')->where('datescan','like',$year20.'-02%')->sum('pages');
    $opd31 = DB::table('tb_opd')->where('datescan','like',$year20.'-03%')->sum('pages');
    $opd41 = DB::table('tb_opd')->where('datescan','like',$year20.'-04%')->sum('pages');
    $opd51 = DB::table('tb_opd')->where('datescan','like',$year20.'-05%')->sum('pages');
    $opd61 = DB::table('tb_opd')->where('datescan','like',$year20.'-06%')->sum('pages');
    $opd71 = DB::table('tb_opd')->where('datescan','like',$year20.'-07%')->sum('pages');
    $opd81 = DB::table('tb_opd')->where('datescan','like',$year20.'-08%')->sum('pages');
    $opd91 = DB::table('tb_opd')->where('datescan','like',$year20.'-09%')->sum('pages');
    $opd101 = DB::table('tb_opd')->where('datescan','like',$year20.'-10%')->sum('pages');
    $opd111 = DB::table('tb_opd')->where('datescan','like',$year20.'-11%')->sum('pages');
    $opd121 = DB::table('tb_opd')->where('datescan','like',$year20.'-12%')->sum('pages');

    $opd12 = DB::table('tb_opd')->where('datescan','like',$year19.'-01%')->sum('pages');
    $opd22 = DB::table('tb_opd')->where('datescan','like',$year19.'-02%')->sum('pages');
    $opd32 = DB::table('tb_opd')->where('datescan','like',$year19.'-03%')->sum('pages');
    $opd42 = DB::table('tb_opd')->where('datescan','like',$year19.'-04%')->sum('pages');
    $opd52 = DB::table('tb_opd')->where('datescan','like',$year19.'-05%')->sum('pages');
    $opd62 = DB::table('tb_opd')->where('datescan','like',$year19.'-06%')->sum('pages');
    $opd72 = DB::table('tb_opd')->where('datescan','like',$year19.'-07%')->sum('pages');
    $opd82 = DB::table('tb_opd')->where('datescan','like',$year19.'-08%')->sum('pages');
    $opd92 = DB::table('tb_opd')->where('datescan','like',$year19.'-09%')->sum('pages');
    $opd102 = DB::table('tb_opd')->where('datescan','like',$year19.'-10%')->sum('pages');
    $opd112 = DB::table('tb_opd')->where('datescan','like',$year19.'-11%')->sum('pages');
    $opd122 = DB::table('tb_opd')->where('datescan','like',$year19.'-12%')->sum('pages');

    return view('backend/layout/scan_dashboard',[

        'data'=>$data,'day'=>$day,
        'opdcount'=>$opdcount,'ipdcount'=>$ipdcount,'opdcountL'=>$opdcountL,'ipdcountL'=>$ipdcountL,
        'opd1'=>$opd1,'opd2'=>$opd2, 'opd3'=>$opd3,'opd4'=>$opd4, 'opd5'=>$opd5,'opd6'=>$opd6, 
        'opd7'=>$opd7,'opd8'=>$opd8, 'opd9'=>$opd9,'opd10'=>$opd10,'opd11'=>$opd11,'opd12'=>$opd12,

        'opd11'=>$opd11,'opd21'=>$opd21, 'opd31'=>$opd31,'opd41'=>$opd41, 'opd51'=>$opd51,'opd61'=>$opd61, 
        'opd71'=>$opd71,'opd81'=>$opd81, 'opd91'=>$opd91,'opd101'=>$opd101,'opd111'=>$opd111,'opd121'=>$opd121,

        'opd12'=>$opd12,'opd22'=>$opd22, 'opd32'=>$opd32,'opd42'=>$opd42, 'opd52'=>$opd52,'opd62'=>$opd62, 
        'opd72'=>$opd72,'opd82'=>$opd82, 'opd92'=>$opd92,'opd102'=>$opd102,'opd112'=>$opd112,'opd122'=>$opd122,

        'opd122'=>$opd122,'opd222'=>$opd222, 'opd322'=>$opd322,'opd422'=>$opd422, 'opd522'=>$opd522,'opd622'=>$opd622, 
        'opd722'=>$opd722,'opd822'=>$opd822, 'opd922'=>$opd922,'opd1022'=>$opd1022,'opd1122'=>$opd1122,'opd1222'=>$opd1222,

        // 'assetscen'=>$assetscen,'assetbuildingscen'=>$assetbuildingscen,
        // 'hos'=>$hos,'buil_chaingmaicen'=>$buil_chaingmaicen,'buil_lamphooncen'=>$buil_lamphooncen,'buil_lampangcen'=>$buil_lampangcen,
        // 'buil_praegcen'=>$buil_praegcen, 'buil_nangcen'=>$buil_nangcen,'buil_payouacen'=>$buil_payouacen,'buil_chaingraycen'=>$buil_chaingraycen,'buil_maehongsoncen'=>$buil_maehongsoncen,
        // 'chaingmai'=>$chaingmai, 'lampang'=>$lampang, 'lamphoon'=>$lamphoon,'prae'=>$prae,'nan'=>$nan,
        // 'payoua'=>$payoua, 'chaingray'=>$chaingray,'maehongson'=>$maehongson,
        // 'perchaingmaicen'=>$perchaingmaicen, 'perlamphooncen'=>$perlamphooncen, 'perlampangcen'=>$perlampangcen,'perpraecen'=>$perpraecen,'pernancen'=>$pernancen,
        // 'perpayouacen'=>$perpayouacen, 'perchaingraycen'=>$perchaingraycen,'permaehongsoncen'=>$permaehongsoncen,
        // 'per'=>$per,'percen'=>$percen,'assets'=>$assets,'assetbuildings'=>$assetbuildings,        
        // 'As_chaingmaicen'=>$As_chaingmaicen, 'As_chaingraycen'=>$As_chaingraycen,'As_nancen'=>$As_nancen,'As_lampangcen'=>$As_lampangcen,
        // 'As_lamphooncen'=>$As_lamphooncen,'As_praecen'=>$As_praecen,'As_payouacen'=>$As_payouacen,'As_maehongsoncen'=>$As_maehongsoncen,
        // 'As_chaingmai'=>$As_chaingmai, 'As_lampang'=>$As_lampang, 'As_lamphoon'=>$As_lamphoon,'As_prae'=>$As_prae,'As_nan'=>$As_nan,
        // 'As_payoua'=>$As_payoua, 'As_chaingray'=>$As_chaingray,'As_maehongson'=>$As_maehongson,
        // 'buil_chaingmai'=>$buil_chaingmai, 'buil_lampang'=>$buil_lampang, 'buil_lamphoon'=>$buil_lamphoon,'buil_prae'=>$buil_prae,'buil_nan'=>$buil_nan,
        // 'buil_payoua'=>$buil_payoua, 'buil_chaingray'=>$buil_chaingray,'buil_maehongson'=>$buil_maehongson,

    ]);
}

function logout(Request $request)
{
    if (session()->has('LogedUser')) {
        session()->pull('LogedUser');
      
    return redirect('login');
}
}

}