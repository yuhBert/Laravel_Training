<?php

namespace App\Http\Controllers;
use App\Models\Human;
use Illuminate\Http\Request;

class UserController extends Controller
{
    

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
//    public function sample()
//    {
//        return view('sample');
//    }

   public function welcome(Request $request)
   {    
    //    dd($request->id);
        // dd(Human::all());
        $humans = Human::all();
        // $humans = Human::whereId($request->id)->get();
    //    return view('welcome',['humans' => $humans]);
    return view('welcome', compact('humans'));
   }
}
