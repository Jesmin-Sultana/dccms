@extends('admin.master')

@section('main')

{{--Message section in blade file--}}

    @if(session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {!! session('error') !!}
        </div>
    @endif

<h1>Employee Feedback</h1>
<a href="{{route('etask.form')}}"></a>

<!-- Search -->
<form action="{{route('admin.etask.list')}}">
<div class="input-group rounded mt-3 mb-2">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" name="search" placeholder="Search" arial-label="Search" aria-describedby="search-addon" />
    <!-- <label class="form-label" for="form1">Search</label> -->
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div>

</form>

<!-- ending search -->

<table class="table">
  <thead>
    <tr>
      <th scope="col">Employee Name</th>
      <th scope="col">Problem Area</th>
      <th scope="col">Work Type</th>
      <th scope="col">Feedback</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
      @foreach($etask as $data)
    <tr>
      <th scope="row">{{$data->employee->employee_name}}</th>
      <td>{{$data->problem_area}}</td>
      <td>{{$data->work_type}}</td>
      <td>{{$data->feedback}}</td>
      <td><img src = "{{url('/uploads/'.$data->image)}}" alt="etask image" width="100px"></td>
      <td>
      <a class="btn btn-danger" href="{{route('admin.Employee.feedback.details',$data->id)}}">View</a>

      </td>
      <td>
      <a class="btn btn-success" href="{{route('admin.etask.edit',$data->id)}}">Edit</a>

      </td>
      <td>
      <a class="btn btn-warning" href="{{route('admin.employee.feedback.delete',$data->id)}}">Delete</a>

      </td>


    
    </tr>
    @endforeach
  </tbody>
</table>
@endsection