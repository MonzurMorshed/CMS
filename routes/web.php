<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\CommonController;
use App\Livewire\Dashboard;

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

Route::get('/dashboard', Dashboard::class)->name('dashboard')->middleware('auth');

Route::apiResource('ourteam', OurTeamController::class);

Route::get('/',function(){
    return view('frontend.landing');
});
Route::get('/about',function(){
    return view('frontend.aboutus');
});
Route::get('/ourteam',function(){
    return view('frontend.ourteam');
});
Route::get('/services',function(){
    return view('frontend.services');
});
Route::get('/services-details',function(){
    return view('frontend.services-details');
});
Route::get('/projects',function(){
    return view('frontend.projects');
});

// {model}
Route::group(['prefix' => 'cms-admin/{model}','middleware' => 'auth'], function () {
    Route::get('/index', [CommonController::class,'index']);
    Route::get('/create', [CommonController::class,'create']);
    Route::get('/store', [CommonController::class,'store']);
    Route::get('/show/{id}', [CommonController::class,'show']);
    Route::get('/update/{id}', [CommonController::class,'update']);
    Route::get('/delete/{id}', [CommonController::class,'delete']);
});
