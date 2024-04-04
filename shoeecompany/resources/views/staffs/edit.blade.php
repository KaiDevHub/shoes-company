 
@extends('layouts.template')
   
   @section('content')
       <div class="row">
           <div class="col-lg-12 margin-tb">
               <div class="pull-left">
                   <h2>Edit Staffs</h2>
               </div>
           </div>
       </div>
      
       @if ($errors->any())
           <div class="alert alert-danger">
               <strong>Whoops!</strong> There were some problems with your input.<br><br>
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif
     
       <form action="{{ route('staffs.update',$staff->id) }}" method="POST">
           @csrf
           @method('PUT')
      
            <div class="row">
               <input type="hidden" name="id" value="{{ $staff->id }}"> <br/>
   
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>First Name:</strong>
                       <input type="text" name="firstName" value="{{ $staff->firstName }}" class="form-control" placeholder="firstName">
                   </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Last Name:</strong>
                       <input type="text" name="lastName" value="{{ $staff->lastName }}" class="form-control" placeholder="lastName">
                   </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Staff Salary:</strong>
                       <input type="type" class="form-control" name="staffSalary" value="{{ $staff->staffSalary }}" placeholder="staffSalary"></input>
                   </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Phone Number:</strong>
                       <input type="type" class="form-control" name="phone_number" value="{{ $staff->phone_number }}" placeholder="phone_number"></input>
                   </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Email:</strong>
                       <input type="type" class="form-control" name="email" value="{{ $staff->email }}" placeholder="email"></input>
                   </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Password:</strong>
                       <input type="password" class="form-control" name="password" placeholder="password"></input>
                   </div>
               </div>
               
               <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">Submit</button>
                   <a class="btn btn-primary" href="{{ route('staffs.index') }}"> Back</a>
               </div>
           </div>
      
       </form>
   @endsection
   