@extends('admin.master')
@section('main')




<h1>Edit Feedback of Complation Task</h1>

@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif


<form action="{{route('admin.etask.update', $etask->id)}}" method='post' enctype="multipart/form-data">
@method('PUT')

    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Employee NID</label>
    <input required name="employee_nid"  value="{{$etask->employee_nid}}" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Employee Name</label>
    <input required name="employee_name" value="{{$etask->employee_name}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter User NID</label>
    <input required name="user_nid" value="{{$etask->user_nid}}" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter User Name</label>
    <input required name="user_name" value="{{$etask->user_name}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Problem Area</label>
    <input required name="problem_area"  value="{{$etask->problem_area}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Employee Work Type</label>
    <select name="work_type" id="work_type">
    <option value="electricity">Electricity</option>
    <option value="water">Water</option>
    <option value="gas">Gas</option>
    <option value="street">Street</option>
    <option value="street">Mosquito</option>
    <option value="street">Waterlogging</option>
    <option value="street">Garbage</option>
    <option value="street">Sewage</option>
  </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Employee Feedback</label>
    <select name="feedback" id="feedback">
    <option value="done">Done</option>
    <option value="good">Good</option>
    <option value="bad">Bad</option>
    <option value="nothing">Nothing</option>
  </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image</label>
    <input  name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection