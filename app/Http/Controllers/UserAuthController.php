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

    $per = DB::table('persons')
    ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    ->count();
    $maxch = 50000;
    $percen = $per * 100 / $maxch;

    $assets = DB::table('assets')
    ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    ->count();
    $maxch = 50000;
    $assetscen = $assets * 100 / $maxch;

    $assetbuildings = DB::table('assetbuildings')
    ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    ->count();
    $maxch = 2000;
    $assetbuildingscen = $assetbuildings * 100 / $maxch;

    $hos = DB::table('persons')
    // ->select("hospcode.hospcode",DB::raw("COUNT(*) as count_hospcode"))
    ->select("HOSPCODE,COUNT(HOSPCODE)")
    // ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    // ->where('hospcode.chwpart','=',50)
    // ->where('hospcode.chwpart','=',51)
    // ->where('hospcode.chwpart','=',52)
    // ->where('hospcode.chwpart','=',54)
    // ->where('hospcode.chwpart','=',55)
    // ->where('hospcode.chwpart','=',56)
    // ->where('hospcode.chwpart','=',57)
    // ->where('hospcode.chwpart','=',58)
    ->groupBy("HOSPCODE")
    ->count();

    // SELECT country,COUNT(*)
    // FROM author      
    // GROUP BY country;

    // ->select("users.id", "users.name", DB::raw("COUNT(click.*) as count_click"))
	//     ->join("click","click.user_id","=","users.id")
	//     ->groupBy("users.id")


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
    // $personchw= DB::table('persons')
    // ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    // ->where('hospcode.chwpart','=',58)
    // ->count();
    $As_chaingmai = DB::table('assets')
    ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    ->where('hospcode.chwpart','=',50)
    ->count();
    $maxch = 10000;
    $As_chaingmaicen = $As_chaingmai * 100 / $maxch;

    $As_lamphoon = DB::table('assets')
    ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    ->where('hospcode.chwpart','=',51)
    ->count();
    $maxch = 10000;
    $As_lamphooncen = $As_lamphoon * 100 / $maxch;

    $As_lampang = DB::table('assets')
    ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    ->where('hospcode.chwpart','=',52)
    ->count();
    $maxch = 10000;
    $As_lampangcen = $As_lampang * 100 / $maxch;
   
    $As_prae = DB::table('assets')
    ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    ->where('hospcode.chwpart','=',54)
    ->count();
    $maxch = 10000;
    $As_praecen = $As_prae * 100 / $maxch;

    $As_nan = DB::table('assets')
    ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    ->where('hospcode.chwpart','=',55)
    ->count();
    $maxch = 10000;
    $As_nancen = $As_nan * 100 / $maxch;

    $As_payoua = DB::table('assets')
    ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    ->where('hospcode.chwpart','=',56)
    ->count();
    $maxch = 10000;
    $As_payouacen = $As_payoua * 100 / $maxch;

    $As_chaingray= DB::table('assets')
    ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    ->where('hospcode.chwpart','=',57)
    ->count();
    $maxch = 10000;
    $As_chaingraycen = $As_chaingray * 100 / $maxch;

    $As_maehongson= DB::table('assets')
    ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    ->where('hospcode.chwpart','=',58)
    ->count();
    $maxch = 10000;
    $As_maehongsoncen = $As_maehongson * 100 / $maxch;

    ////////////////////////////////////////////////////////////////
    
    $buil_chaingmai = DB::table('assetbuildings')
    ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    ->where('hospcode.chwpart','=',50)
    ->count();
    $maxch = 500;
    $buil_chaingmaicen = $buil_chaingmai * 100 / $maxch;

    $buil_lamphoon = DB::table('assetbuildings')
    ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    ->where('hospcode.chwpart','=',51)
    ->count();
    $maxch = 500;
    $buil_lamphooncen = $buil_lamphoon * 100 / $maxch;

    $buil_lampang = DB::table('assetbuildings')
    ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    ->where('hospcode.chwpart','=',52)
    ->count();
    $maxch = 500;
    $buil_lampangcen = $buil_lampang * 100 / $maxch;
   
    $buil_prae = DB::table('assetbuildings')
    ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    ->where('hospcode.chwpart','=',54)
    ->count();
    $maxch = 500;
    $buil_praegcen = $buil_prae * 100 / $maxch;

    $buil_nan = DB::table('assetbuildings')
    ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    ->where('hospcode.chwpart','=',55)
    ->count();
    $maxch = 500;
    $buil_nangcen = $buil_nan * 100 / $maxch;
    
    $buil_payoua = DB::table('assetbuildings')
    ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    ->where('hospcode.chwpart','=',56)
    ->count();
    $maxch = 500;
    $buil_payouacen = $buil_payoua * 100 / $maxch;

    $buil_chaingray= DB::table('assetbuildings')
    ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    ->where('hospcode.chwpart','=',57)
    ->count();
    $maxch = 500;
    $buil_chaingraycen = $buil_chaingray * 100 / $maxch;

    $buil_maehongson= DB::table('assetbuildings')
    ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    ->where('hospcode.chwpart','=',58)
    ->count();
    $maxch = 500;
    $buil_maehongsoncen = $buil_maehongson * 100 / $maxch;

    return view('backend/dashboard',[
        'assetscen'=>$assetscen,'assetbuildingscen'=>$assetbuildingscen,

        'hos'=>$hos,'buil_chaingmaicen'=>$buil_chaingmaicen,'buil_lamphooncen'=>$buil_lamphooncen,'buil_lampangcen'=>$buil_lampangcen,

        'buil_praegcen'=>$buil_praegcen, 'buil_nangcen'=>$buil_nangcen,'buil_payouacen'=>$buil_payouacen,'buil_chaingraycen'=>$buil_chaingraycen,'buil_maehongsoncen'=>$buil_maehongsoncen,
      

        'chaingmai'=>$chaingmai, 'lampang'=>$lampang, 'lamphoon'=>$lamphoon,'prae'=>$prae,'nan'=>$nan,
        'payoua'=>$payoua, 'chaingray'=>$chaingray,'maehongson'=>$maehongson,
        'perchaingmaicen'=>$perchaingmaicen, 'perlamphooncen'=>$perlamphooncen, 'perlampangcen'=>$perlampangcen,'perpraecen'=>$perpraecen,'pernancen'=>$pernancen,
        'perpayouacen'=>$perpayouacen, 'perchaingraycen'=>$perchaingraycen,'permaehongsoncen'=>$permaehongsoncen,



        'data'=>$data,'per'=>$per,'percen'=>$percen,'assets'=>$assets,'assetbuildings'=>$assetbuildings,        

        'As_chaingmaicen'=>$As_chaingmaicen, 'As_chaingraycen'=>$As_chaingraycen,'As_nancen'=>$As_nancen,'As_lampangcen'=>$As_lampangcen,
        'As_lamphooncen'=>$As_lamphooncen,'As_praecen'=>$As_praecen,'As_payouacen'=>$As_payouacen,'As_maehongsoncen'=>$As_maehongsoncen,

        'As_chaingmai'=>$As_chaingmai, 'As_lampang'=>$As_lampang, 'As_lamphoon'=>$As_lamphoon,'As_prae'=>$As_prae,'As_nan'=>$As_nan,
        'As_payoua'=>$As_payoua, 'As_chaingray'=>$As_chaingray,'As_maehongson'=>$As_maehongson,

        'buil_chaingmai'=>$buil_chaingmai, 'buil_lampang'=>$buil_lampang, 'buil_lamphoon'=>$buil_lamphoon,'buil_prae'=>$buil_prae,'buil_nan'=>$buil_nan,
        'buil_payoua'=>$buil_payoua, 'buil_chaingray'=>$buil_chaingray,'buil_maehongson'=>$buil_maehongson,

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