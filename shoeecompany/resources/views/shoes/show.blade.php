@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Shoes Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Shoes Category:</strong>
                {{ $shoes->shoesCategory }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Shoes Price:</strong>
                {{ $shoes->shoesPrice }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Shoes Quantity:</strong>
                {{ $shoes->shoesQuantity}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Shoes Size:</strong>
                {{ $shoes->shoesSize }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Shoes Colour:</strong>
                {{ $shoes->shoesColour }}
            </div>
        </div>

        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('shoes.index') }}"> Back</a>
        </div>
    </div>
@endsection
