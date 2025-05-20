<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OurTeamController;

Route::apiResource('ourteam', OurTeamController::class);
