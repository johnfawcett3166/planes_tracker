<?php

use App\Http\Controllers\AircraftController;
use Illuminate\Support\Facades\Route;

Route::get('/aircraft', [AircraftController::class, 'getAircraftFeed']);
