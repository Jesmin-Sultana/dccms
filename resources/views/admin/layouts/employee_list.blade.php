@extends('admin.master')

@section('main')

<h1>Employee List</h1>
<a href="{{route('admin.employee.form')}}" class="btn btn-warning">Employee Info</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">NID Number</th>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
      @foreach($employee as $data)
    <tr>
      <th scope="row">{{$data->name}}</th>
      <td>{{$data->nid_number}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->phone_number}}</td>
      <td>{{$data->age}}</td>
      <td>{{$data->gender}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>

@endsection