@extends('admin.master')

@section('main')

<h1>Employee List</h1>
<a href="{{route('admin.employee.form')}}" class="btn btn-warning">Add Employee</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Employee Name</th>
      <th scope="col">NID Number</th>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Working Field</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
      @foreach($employee as $data)
    <tr>
      <th scope="row">{{$data->employee_name}}</th>
      <td>{{$data->nid_number}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->phone_number}}</td>
      <td>{{$data->age}}</td>
      <td>{{$data->gender}}</td>
      <td>{{$data->working_field}}</td>

      <td>
      <a class="btn btn-success" href="{{route('admin.employee.details',$data->nid_number)}}">View</a>

      </td>
      <td>
      <a class="btn btn-warning" href="{{route('admin.employee.details.delete',$data->id)}}">Delete</a>

      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>

@endsection