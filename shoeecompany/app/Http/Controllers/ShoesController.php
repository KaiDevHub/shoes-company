<?php

namespace App\Http\Controllers;

use App\Shoes;
use Illuminate\Http\Request;
use DB;
use Hash;

class ShoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoe = Shoes::all();

        return view('shoes.index',compact('shoe'));
    }

    public function create()
    {
        return view('shoes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'shoesCategory' => 'required',
            'shoesPrice' => 'required',
            'shoesQuantity' => 'required',
            'shoesSize'=> 'required',
            'shoesColour'=>'required',
            
        ]);

        // DB::table('shoes')->insert([
        //     'name' => $request->name,
        //     'password' => $request->password,
        //     'email' => $request->email,
            
        // ]);
  
        Shoes::create($request->all());
   
        return redirect()->route('shoes.index')
                        ->with('success','shoe created successfully.');

    }

    public function show(Shoes $shoe)
    {
        return view('shoes.show',compact('shoe'));
    }

    public function edit(Shoes $shoe)
    {
        return view('shoes.edit',compact('shoe'));
    }

    public function update(Request $request, Shoes $shoes)
    {
        $request->validate([
            'shoesCategory' => 'required',
            'shoesPrice' => 'required',
            'shoesQuantity' => 'required',
            'shoesSize'=> 'required',
            'shoesColour'=>'required',
            
            
        ]);

        // DB::table('shoes')->where('id',$request->id)->update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ]);
  
        $shoes->update($request->all());
  
        return redirect()->route('shoes.index')
                        ->with('success','shoe updated successfully');
    }

    public function destroy(Shoes $shoes)
    {
        $shoes->delete();
  
        return redirect()->route('shoes.index')
                        ->with('success','shoe deleted successfully');
    }
}