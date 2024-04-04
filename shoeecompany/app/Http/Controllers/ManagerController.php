<?php

namespace App\Http\Controllers;

use App\Manager;
use Illuminate\Http\Request;
use DB;
use Hash; 

class ManagerController extends Controller
{
    public function index()
    {
        $manager = Manager::all();
        return view('managers.index', compact('manager'));
    }

    public function show(Manager $manager)
    {
        return view('managers.show',compact('manager'));

    }

    public function create()
    {
        return view('managers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'stateArea' => 'required',
            'postalCode' => 'required',
            'address' => 'required',
           
        ]);

        Manager::create($request->all());

        return redirect()->route('managers.index')
                         ->with('success','Manager updated successfully');
    }
    
    public function edit(Manager $manager)
    {
        return view('managers.edit', compact('manager'));
    }

    public function update(Request $request, Manager $manager)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'stateArea' => 'required',
            'postalCode' => 'required',
            'address' => 'required',
        ]);

       /*  DB::table('users')->where('id',$request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]); */
  
         $manager->update($request->all());
  
        return redirect()->route('managers.index')
                        ->with('success','Manager updated successfully');
    }

    public function destroy(Manager $manager)
     {
         $manager->delete();
   
         return redirect()->route('managers.index')
                         ->with('success','Manager deleted successfully');
     }
}


