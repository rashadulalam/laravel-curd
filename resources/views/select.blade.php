@extends('layout.app')
@section('content')
    




<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Show Data</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Class</th>
        <th>Class Roll</th>
        <th>Action</th>
    </tr>

    @foreach($selectKey as $data )
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->class }}</td>
        <td>{{ $data->roll }}</td>
        <td>
            <div>
                <a type="button" class="btn btn-warning" href="{{ url('/update') }}">Update</a>
                <a type="button" class="btn btn-danger" href="{{ url('/delete') }}">Delete</a>
              </div>
        </td>
    </tr>
    @endforeach
</table>
</div>

@endsection