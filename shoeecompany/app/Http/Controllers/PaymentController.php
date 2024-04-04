<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use DB;
use Hash;

class PaymentController extends Controller
{
    public function index()
    {
        $payment = Payment::all();

        return view('payments.index',compact('payment'));

    }

    public function create()
    {
        return view('payments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'paymentDate' => 'required',
            'paymentTime' => 'required',
            'paymentType' => 'required',
            
        ]);

        // DB::table('payment')->insert([
        //     'name' => $request->name,
        //     'password' => $request->password,
        //     'email' => $request->email,
            
        // ]);
  
        Payment::create($request->all());
   
        return redirect()->route('payments.index')
                        ->with('success','payment created successfully.');

    }

    public function show(Payment $payment)
    {
        return view('payments.show',compact('payment'));
    }

    public function edit(Payment $payment)
    {
        return view('payments.edit',compact('payment'));
    }

    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'paymentDate' => 'required',
            'paymentTime' => 'required',
            'paymentType' => 'required',
            
            
        ]);

        // DB::table('payment')->where('id',$request->id)->update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ]);
  
        $payment->update($request->all());
  
        return redirect()->route('payments.index')
                        ->with('success','payment updated successfully');

    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
  
        return redirect()->route('payments.index')
                        ->with('success','payment deleted successfully');
    }
}

