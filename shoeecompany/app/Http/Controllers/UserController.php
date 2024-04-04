<?php

namespace App\Http\Controllers;

use App\User;
use App\Staff;
use Illuminate\Http\Request;
use DB;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();

        return view('users.index',compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'phone_number' => 'required',
            'email'=> 'required',
            'stateArea'=> 'required',
            'postalCode'=> 'required',
            'address'=> 'required',
            'password'=> 'required',
        ]);

        // DB::table('users')->insert([
        //     'name' => $request->name,
        //     'password' => $request->password,
        //     'email' => $request->email,
            
        // ]);
  
        User::create($request->all());
   
        return redirect()->route('users.index')
                        ->with('success','user created successfully.');
    }

    public function show(User $users)
    {
        return view('users.show',compact('user'));
    }

    public function edit(User $users)
    {
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'phone_number' => 'required',
            'email'=> 'required',
            'stateArea'=> 'required',
            'postalCode'=> 'required',
            'address'=> 'required',
            'password'=> 'required',
        ]);

        // DB::table('users')->where('id',$request->id)->update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ]);
  
        $user->update($request->all());
  
        return redirect()->route('users.index')
                        ->with('success','user updated successfully');

    }

    public function destroy(user $users)
    {
        $users->delete();
  
        return redirect()->route('users.index')
                        ->with('success','user deleted successfully');
    }
}