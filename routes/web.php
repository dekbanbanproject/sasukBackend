<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FontController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\ConfigController;


Route::get('/', function () {
    return view('fontend/mainfont');
});
Route::get('fontend/contact','FontController@contact');
Route::get('fontend/blog/index','FontController@index');
Route::match(['get','post'],'fontend/about','FontController@about')->name('about');


Route::get('login',[UserAuthController::class,'login']);
Route::get('register',[UserAuthController::class,'register']);
Route::post('create',[UserAuthController::class,'create'])->name('auth.create');
Route::post('check',[UserAuthController::class,'check'])->name('auth.check');

Route::get('backend_dashboard',[UserAuthController::class,'backend_dashboard'])->name('backend_dashboard');
Route::get('logout',[UserAuthController::class,'logout']);

Route::get('backend/config/category',[ConfigController::class,'config_category'])->name('config.category');
Route::get('backend/config/addcategory',[ConfigController::class,'config_addcategory'])->name('config.addcategory');


