<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FontController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\DashController;


Route::get('/', function () {
    return view('fontend/mainfont');
});
Route::get('fontend/contact','FontController@contact');
Route::get('fontend/blog/index','FontController@index');
Route::match(['get','post'],'fontend/about','FontController@about')->name('about');


Route::get('login',[UserAuthController::class,'login']);
Route::get('register',[UserAuthController::class,'register']);
Route::get('logout',[UserAuthController::class,'logout']);
//===============================================================================================================//
Route::post('create',[UserAuthController::class,'create'])->name('auth.create');
Route::post('check',[UserAuthController::class,'check'])->name('auth.check');
Route::get('backend_dashboard',[UserAuthController::class,'backend_dashboard'])->name('backend_dashboard');


// Route::get('backend/dashboard/indexdh',[DashController::class,'indexdh'])->name('dash.indexdh');
Route::get('backend/dashboardperson',[DashController::class,'dashboardperson'])->name('dash.dashboardperson');

Route::get('backend/dashboardperson_province',[DashprovinceController::class,'dashboardperson_province'])->name('dash.dashboardperson_province');



Route::get('backend/config/category',[ConfigController::class,'config_category'])->name('config.category');
Route::get('backend/config/addcategory',[ConfigController::class,'config_addcategory'])->name('config.addcategory');


