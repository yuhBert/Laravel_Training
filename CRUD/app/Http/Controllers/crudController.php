<?php

namespace App\Http\Controllers;
use App\Models\crud;
use Illuminate\Http\Request;

class crudController extends Controller
{
    public function showAdd()
    {
        return view('add');
    } 
    public function crudTest(Request $request)
    {
        $cruds = crud::all();
        return view('home', compact('cruds'));
    }
    
    public function add(Request $request) 
    {
        $add = new crud;
        $add->name = $request->input('name');
        $add->age = $request->input('age');
        $add->address = $request->input('address');
        $add->save();
        return redirect('show');
    }

   
}
