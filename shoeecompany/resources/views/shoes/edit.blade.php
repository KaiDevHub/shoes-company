 
@extends('layouts.template')
   
   @section('content')
       <div class="row">
           <div class="col-lg-12 margin-tb">
               <div class="pull-left">
                   <h2>Edit Shoes</h2>
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
     
       <form action="{{ route('shoes.update',$shoes->id) }}" method="POST">
           @csrf
           @method('PUT')
      
            <div class="row">
               <input type="hidden" name="id" value="{{ $shoes->id }}"> <br/>
   
               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Shoes Category:</strong>
                       <input type="text" name="shoesCategory" value="{{ $shoes->shoesCategory}}" class="form-control" placeholder="shoesCategory">
                   </div>
               </div>

               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Shoes Price:</strong>
                       <input type="type" class="form-control" name="shoesPrice" value="{{ $shoes->shoesPrice}}" placeholder="shoesPrice"></input>
                   </div>
               </div>

               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Shoes Quantity:</strong>
                       <input type="text" name="shoesQuantity" value="{{ $shoes->shoesQuantity}}" class="form-control" placeholder="shoesQuantity">
                   </div>
               </div>

               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Shoes Size:</strong>
                       <input type="text" name="shoesSize" value="{{ $shoes->shoesSize}}" class="form-control" placeholder="shoesSize">
                   </div>
               </div>

               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Shoes Colour:</strong>
                       <input type="text" name="shoesColour" value="{{ $shoes->shoesColour}}" class="form-control" placeholder="shoesColour">
                   </div>
               </div>
              
               <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                 <button type="submit" class="btn btn-primary">Submit</button>
                   <a class="btn btn-primary" href="{{ route('shoes.index') }}"> Back</a>
               </div>
           </div>
      
       </form>
   @endsection
   