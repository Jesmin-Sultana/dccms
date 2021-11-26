@extends('admin.master')

@section('main')
<h1>User List</h1>
<a href="{{route('user.form')}}" class="btn btn-secondary">Create a User List</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">NID Number</th>
      <th scope="col">Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Problem Type</th>
      <th scope="col">Applicatopn Type</th>
    </tr>
  </thead>
  <tbody>
  @foreach($usertable as $data)

    <tr>
      <th scope="row">{{$data->nid_number}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->phone_number}}</td>
      <td>{{$data->gender}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->problem_type}}</td>
      <td>{{$data->application_type}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection