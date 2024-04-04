@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Staffs</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('staffs.create') }}"> Add New Staff</a>
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
            <th>Staff Salary</th>
            <th>Phone Name</th>
            <th>Email</th>
            <th>Joined On</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($staff as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->firstName }}</td>
            <td>{{ $s->lastName }}</td>
            <td>{{ $s->staffSalary }}</td>
            <td>{{ $s->phone_number }}</td>
            <td>{{ $s->email }}</td>
            <td>{{ $s->created_at }}</td>
            <td>
                <form action="{{ route('staffs.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('staffs.show',$s->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('staffs.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection