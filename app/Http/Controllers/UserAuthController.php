<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserAuthController extends Controller
{
   function login(){
       return view('auth.login');
   }
   function register(){
    return view('auth.register');
    }
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

function backend_dashboard(Request $request)
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

    // $personchw= DB::table('persons')
    // ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    // ->where('hospcode.chwpart','=',58)
    // ->count();
    $As_chaingmai = DB::table('assets')
    ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    ->where('hospcode.chwpart','=',50)
    ->count();
    $As_lamphoon = DB::table('assets')
    ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    ->where('hospcode.chwpart','=',51)
    ->count();
    $As_lampang = DB::table('assets')
    ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    ->where('hospcode.chwpart','=',52)
    ->count();
    $As_lamphoon = DB::table('assets')
    ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    ->where('hospcode.chwpart','=',51)
    ->count();
    $As_prae = DB::table('assets')
    ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    ->where('hospcode.chwpart','=',54)
    ->count();
    $As_nan = DB::table('assets')
    ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    ->where('hospcode.chwpart','=',55)
    ->count();
    $As_payoua = DB::table('assets')
    ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    ->where('hospcode.chwpart','=',56)
    ->count();
    $As_chaingray= DB::table('assets')
    ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    ->where('hospcode.chwpart','=',57)
    ->count();
    $As_maehongson= DB::table('assets')
    ->leftjoin('hospcode','hospcode.hospcode','=','assets.HOSPCODE')
    ->where('hospcode.chwpart','=',58)
    ->count();

    ////////////////////////////////////////////////////////////////
    
    $buil_chaingmai = DB::table('assetbuildings')
    ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    ->where('hospcode.chwpart','=',50)
    ->count();
    $buil_lamphoon = DB::table('assetbuildings')
    ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    ->where('hospcode.chwpart','=',51)
    ->count();
    $buil_lampang = DB::table('assetbuildings')
    ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    ->where('hospcode.chwpart','=',52)
    ->count();
    $buil_lamphoon = DB::table('assetbuildings')
    ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    ->where('hospcode.chwpart','=',51)
    ->count();
    $buil_prae = DB::table('assetbuildings')
    ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    ->where('hospcode.chwpart','=',54)
    ->count();
    $buil_nan = DB::table('assetbuildings')
    ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    ->where('hospcode.chwpart','=',55)
    ->count();
    $buil_payoua = DB::table('assetbuildings')
    ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    ->where('hospcode.chwpart','=',56)
    ->count();
    $buil_chaingray= DB::table('assetbuildings')
    ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    ->where('hospcode.chwpart','=',57)
    ->count();
    $buil_maehongson= DB::table('assetbuildings')
    ->leftjoin('hospcode','hospcode.hospcode','=','assetbuildings.HOSPCODE')
    ->where('hospcode.chwpart','=',58)
    ->count();

    return view('backend/dashboard',[
        'data'=>$data,'per'=>$per,'assets'=>$assets,'assetbuildings'=>$assetbuildings,
        'chaingmai'=>$chaingmai, 'lampang'=>$lampang, 'lamphoon'=>$lamphoon,'prae'=>$prae,'nan'=>$nan,
        'payoua'=>$payoua, 'chaingray'=>$chaingray,'maehongson'=>$maehongson,

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