<?php

use App\Http\Controllers\crudcontrol;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[crudcontrol::class,"index"]);
Route::post('store',[crudcontrol::class,"store"]);
Route::get('show',[crudcontrol::class,"show"]);
Route::get('edit{id}',[crudcontrol::class,"edit"])->name('edit');
Route::post('update{id}',[crudcontrol::class,"update"])->name('update');
Route::delete('delete{id}',[crudcontrol::class,"delete"])->name('delete');
