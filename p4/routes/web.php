<?php

use App\Http\Controllers\crudcontrol;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login',[crudcontrol::class,'log']);
Route::post('store',[crudcontrol::class,'store']);