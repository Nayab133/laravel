<?php


use App\Http\Controllers\crudcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[crudcontroller::class,'index']);
Route::post('store',[crudcontroller::class,'store']);
Route::get('show',[crudcontroller::class,'show']);
Route::get('edit{id}',[crudcontroller::class,'edit'])->name('edit');
Route::post('update{id}',[crudcontroller::class,'update'])->name('update');
Route::delete('delete{id}',[crudcontroller::class,'delete'])->name('delete');
//               
