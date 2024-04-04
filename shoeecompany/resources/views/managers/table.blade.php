@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Manager</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('managers.create') }}"> Add New Manager</a>
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
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Joined On</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($manager as $t)
        <tr>
            <td>{{ $t->id }}</td>
            <td>{{ $t->firstName}}</td>
            <td>{{ $t->lastName}} 
            <td>{{ $t->phone_number}} </td>
            <td>{{ $t->email}}</td>
            <td>{{ $t->created_at}}
          
            <td>
                <form action="{{ route('managers.destroy',$t->id) }}" method="POST">
   
                <a class="btn btn-info" href="{{ route('managers.show',$t->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('managers.edit',$t->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
