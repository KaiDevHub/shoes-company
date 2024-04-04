   @extends('layouts.template')
   
   @section('content')
       <div class="row">
           <div class="col-lg-12 margin-tb">
               <div class="pull-left">
                   <h2>Edit Students</h2>
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
     
       <form action="{{ route('payments.update',$payment->id) }}" method="POST">
           @csrf
           @method('PUT')
      
            <div class="row">
               <input type="hidden" name="id" value="{{ $payment->id }}"> <br/>
   
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Payment Date:</strong>
                       <input type="text" name="paymentDate" value="{{ $payment->paymentDate }}" class="form-control" placeholder="paymentDate">
                   </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Payment Date:</strong>
                       <input type="text" class="form-control" name="paymentTime" value="{{ $payment->paymentTime }}" placeholder="paymentTime"></input>
                   </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Payment Type:</strong>
                       <input type="text" class="form-control" name="paymentType" value="{{ $payment->paymentType }}" placeholder="paymentType"></input>
                   </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">Submit</button>
                   <a class="btn btn-primary" href="{{ route('payments.index') }}"> Back</a>
               </div>
           </div>
      
       </form>
   @endsection