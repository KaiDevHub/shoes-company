   
@extends('layouts.template')
   
   @section('content')
       <div class="row">
           <div class="col-lg-12 margin-tb">
               <div class="pull-left">
                   <h2>Edit Managers</h2>
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
     
       <form action="{{ route('managers.update',$manager->id)}}" method="POST">
           @csrf
           @method('PUT')
      
            <div class="row">
               <input type="hidden" name="id" value="{{$manager->id}}"> <br/>
   
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>First Name:</strong>
                       <input type="text" name="firstName" value="{{$manager->firstName}}" class="form-control" placeholder="firstName">
                   </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Last Name:</strong>
                       <input type="text" name="lastName" value="{{ $manager->name}}" class="form-control" placeholder="lastName">
                   </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Phone Number:</strong>
                       <input type="text" name="phone_number" value="{{ $manager->name}}" class="form-control" placeholder="phone_number">
                   </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Email:</strong>
                       <input type="text" class="form-control" name="email" value="{{ $manager->email}}" placeholder="email"></input>
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
                   <a class="btn btn-primary" href="{{ route('managers.index') }}"> Back</a>
               </div>
           </div>
      
       </form>
   @endsection