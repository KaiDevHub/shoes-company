
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Shoes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('shoes.create') }}"> Add New Shoes</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Shoes Category</th>
            <th>Shoes Price</th>
            <th>Shoes Quantity</th>
            <th>Shoes Size</th>
            <th>Shoes Colour</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($shoes as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->shoesCategory }}</td>
            <td>{{ $s->shoesPrice }}</td>
            <td>{{ $s->shoesQuantity }}</td>
            <td>{{ $s->shoesSize }}</td>
            <td>{{ $s->shoesColour }}</td>
            <td>
                <form action="{{ route('shoes.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('shoes.show',$s->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('shoes.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection