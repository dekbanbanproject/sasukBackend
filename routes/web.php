<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FontController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\DashController;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('fontend/mainfont');
    // $per = DB::table('persons')
    // ->leftjoin('hospcode','hospcode.hospcode','=','persons.HOSPCODE')
    // ->count();
    // $maxch = 50000;
    // $percen = $per * 100 / $maxch;
    // return view('backend/dashboard');
});


// Route::get('/',[UserAuthController::class,'backend_dashboard']);
Route::get('fontend/contact','FontController@contact');
Route::get('fontend/blog/index','FontController@index');
Route::match(['get','post'],'fontend/about','FontController@about')->name('about');

//===============================================================================================================//
Route::get('backend/profile/editprofile',[UserController::class,'editprofile'])->name('user.editprofile');
Route::get('login',[UserAuthController::class,'login']);
Route::get('register',[UserAuthController::class,'register']);
Route::get('logout',[UserAuthController::class,'logout']);
//===============================================================================================================//
Route::post('create',[UserAuthController::class,'create'])->name('auth.create');
Route::post('check',[UserAuthController::class,'check'])->name('auth.check');
Route::get('backend_dashboard',[UserAuthController::class,'backend_dashboard'])->name('backend_dashboard');
Route::get('backend/personcount',[UserAuthController::class,'personcount'])->name('auth.personcount');




// Route::get('backend/dashboard/indexdh',[DashController::class,'indexdh'])->name('dash.indexdh');
Route::get('backend/dashboardperson',[DashController::class,'dashboardperson'])->name('dash.dashboardperson');

Route::get('backend/dashboardperson_only/{provincecode}',[DashController::class,'personprovinceonly'])->name('dash.personprovinceonly');



Route::get('backend/config/category',[ConfigController::class,'config_category'])->name('config.category');
Route::get('backend/config/addcategory',[ConfigController::class,'config_addcategory'])->name('config.addcategory');

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\LoginController::class, 'handleFacebookCallback']);

// Google login
Route::get('login/google', [App\Http\Controllers\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\LoginController::class, 'handleGoogleCallback']);

