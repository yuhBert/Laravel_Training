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
        $humans = Human::all();
    return view('welcome', compact('humans'));
   }

   public function create(Request $request) 
   {    

        $request -> validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email'],
            'age' => 'required|numeric',
            'gender' => 'required',
            'address' => 'required'
        ]);

        $add = new Human;
        $add->first_name = $request->input('first_name');
        $add->middle_name = $request->input('middle_name');
        $add->last_name = $request->input('last_name');
        $add->email = $request->input('email');
        $add->age = $request->input('age');
        $add->gender = $request->input('gender');
        $add->address = $request->input('address');
        $add->save();
        return redirect('welcome');

   }

   public function addHuman()
   {
       return view('addHuman');
   }

   public function delete($id)
   {
       $delete = Human::findOrFail($id);
       $delete->delete();
       return redirect('welcome');
   }

   public function editHuman($id)
   {
        $human = Human::findOrFail($id);
        if(!$human){
            return abort(404);
        }
        return view('editHuman',['human'=>$human]);
   }

   public function update(Request $request, $id) 
   {    

        $request -> validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email'],
            'age' => 'required|numeric',
            'gender' => 'required',
            'address' => 'required'
        ]);

        $edit = Human::find($id);
        $edit->first_name = $request->get('first_name');
        $edit->middle_name = $request->get('middle_name');
        $edit->last_name = $request->get('last_name');
        $edit->email = $request->get('email');
        $edit->age = $request->get('age');
        $edit->gender = $request->get('gender');
        $edit->address = $request->get('address');
        $edit->save();
        return redirect('welcome');

   }

}
