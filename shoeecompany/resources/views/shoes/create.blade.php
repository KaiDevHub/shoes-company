
@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Shoes</h2>
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
   
<form action="{{ route('shoes.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Shoes Category:</strong>
                <input type="text" class="form-control" name="shoesCategory" placeholder="shoesCategory">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Shoes Price:</strong>
                <input type="text" class="form-control" name="shoesPrice" placeholder="shoesPrice">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Shoes Quantity:</strong>
                <input type="text" class="form-control" name="shoesQuantity" placeholder="shoesQuantity">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Shoes Size:</strong>
                <input type="text" class="form-control" name="shoesSize" placeholder="shoesSize">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Shoes Colour:</strong>
                <input type="text" class="form-control" name="shoesColour" placeholder="shoesColour">
            </div>
        </div>
   
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('shoes.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection
