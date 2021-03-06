@extends('admin.master')
@section('main')

<form action="{{route('admin.employee.info.update', $employee->id)}}" method='post'>
@method('PUT')

    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Employee Name</label>
    <input name="employee_name" value="{{$employee->employee_name}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your NID Number</label>
    <input name="nid_number" value="{{$employee->nid_number}}" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Email</label>
    <input name="address" value="{{$employee->email}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Phone Number</label>
    <input name="phone_number" value="{{$employee->phone_number}}" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Gender</label>
    <!-- <input name="gender" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
    <select name="gender" id="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
    <option value="other">Other</option>
  </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your City</label>
    <input name="address" value="{{$employee->city}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Country</label>
    <input name="address" value="{{$employee->country}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Address</label>
    <input name="address" value="{{$employee->address}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Working Field</label>
    <!-- <input name="working_field" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
    <select name="working_field" id="working_field">
    @foreach($working_field as $data)
    <option value="{{$data->id}}">{{$data->problem_type}}</option>
	@endforeach

  </select>
  </div>
  
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection