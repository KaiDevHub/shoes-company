<?php

namespace App\Http\Controllers;

use App\Staff;
use App\Manager;
use Illuminate\Http\Request;
use DB;
use Hash;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::all('staff');

        return view('staffs.index',compact('staff'));
    }

    public function create(Staff $staff)
    {
        $staff = Staff::pluck('firstname', 'id');

        return view('staffs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'phone_number' => 'required',
            'email'=> 'required',
            'staffSalary'=>'required',
            'password'=> 'required',            
        ]);

        // DB::table('staffs')->insert([
        //     'name' => $request->name,
        //     'password' => $request->password,
        //     'email' => $request->email,
            
        // ]);
  
        Staff::create($request->all());
   
        return redirect()->route('staffs.index')
                        ->with('success','staff created successfully.');
    }

    public function show(Staff $staff)
    {
        return view('staffs.show',compact('staff'));
    }

    public function edit(Staff $staff)
    {
        return view('staffs.edit',compact('staff'));
    }

    public function update(Request $request, Staff $staff)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'phone_number' => 'required',
            'email'=> 'required',
            'staffSalary'=>'required',
            'password'=> 'required',
            
        ]);

        // DB::table('staffs')->where('id',$request->id)->update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ]);
  
        $staff->update($request->all());
  
        return redirect()->route('staffs.index')
                        ->with('success','staff updated successfully');

    }

    public function destroy(Staff $staff)
    {
        $staff->delete();
  
        return redirect()->route('staffs.index')
                        ->with('success','staff deleted successfully');
    }
}