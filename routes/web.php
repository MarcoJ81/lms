<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Seccion1Controller;
use App\Http\Controllers\Seccion2Controller;
use App\Http\Controllers\Seccion3Controller;
use App\Http\Controllers\Seccion4Controller;
use App\Http\Controllers\Seccion5Controller;
use App\Http\Controllers\Seccion6Controller;
use App\Http\Controllers\Seccion7Controller;
use App\Http\Controllers\Seccion8Controller;
use App\Http\Controllers\Seccion9Controller;


Route::get('home/', HomeController::class);

Route::get('seccion1/', Seccion1Controller::class);

Route::get('seccion2/', Seccion2Controller::class);

Route::get('seccion3/', Seccion3Controller::class);

Route::get('seccion4/', Seccion4Controller::class);

Route::get('seccion5/', Seccion5Controller::class);

Route::get('seccion6/', Seccion6Controller::class);

Route::get('seccion7/', Seccion7Controller::class);

Route::get('seccion8/', Seccion8Controller::class);

Route::get('seccion9/', Seccion9Controller::class);
