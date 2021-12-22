@extends('admin.master')

@section('main')
<h1>User List</h1>


<table class="table">
  <thead>
    <tr>
    <th scope="col">First Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">NID Number</th>
    <th scope="col">Email</th>
    <th scope="col">Phone Number</th>
    <th scope="col">Gender</th>
    <th scope="col">City</th>
    <th scope="col">Country</th>
    <th scope="col">Address</th>
    <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
  @foreach($usertable as $data)

    <tr>
      <th scope="row">{{$data->first_name}}</th>
      <td>{{$data->last_name}}</td>
      <td>{{$data->nid_number}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phone_number}}</td>
      <td>{{$data->gender}}</td>
      <td>{{$data->city}}</td>
      <td>{{$data->country}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->password}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection