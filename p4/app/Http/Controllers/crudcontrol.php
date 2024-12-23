<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;

class crudcontrol extends Controller
{
  public function log(){
    return view ('crud.index');
  } 

  public function store(Request $request){
    crud::create([
      'Email'=>$request->email,
      'pass'=>$request->pass,
    ]);
  }
}
