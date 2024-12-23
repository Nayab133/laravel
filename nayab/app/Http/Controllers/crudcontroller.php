<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;

class crudcontroller extends Controller
{
    public function index(){
        return view ('crud.index');
    }

    public function store(Request $request){
        crud::create([
            'Name'=>$request->name,
            'Email'=>$request->email,
        ]);

        session()->flash('success','Data successfully inserted');
        
        return redirect ('index');
    }

    public function show(){
        $users = Crud::all();
        return view('crud.show', compact('users'));
    }
    public function edit($id){
        $user = crud::find($id);
        return view('crud.edit',compact('user'));
    }

    public function update(Request $request,$id){
       $user = crud::find($id);

        $user->Name = $request->name;
        $user->Email = $request->email;
        $user->save();

        return redirect('show');
        
    }

    public function delete($id){
        $user = crud::find($id);
        $user->delete();
        return redirect('show');
    }
}
