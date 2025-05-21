<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Http\Controllers\OurTeamController;
use App\Livewire\Dashboard;

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

Route::get('/dashboard', Dashboard::class)->name('dashboard')->middleware('auth');

Route::apiResource('ourteam', OurTeamController::class);
