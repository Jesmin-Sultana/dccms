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
<a href="{{route('etask.form')}}" class="btn btn-danger">Submit Employee Feedback</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Employee NID Number</th>
      <th scope="col">Employee Name</th>
      <th scope="col">User NID</th>
      <th scope="col">User Name</th>
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
      <th scope="row">{{$data->employee_nid}}</th>
      <td>{{$data->employee_name}}</td>
      <td>{{$data->user_nid}}</td>
      <td>{{$data->user_name}}</td>
      <td>{{$data->problem_area}}</td>
      <td>{{$data->work_type}}</td>
      <td>{{$data->feedback}}</td>
      <td><img src = "{{url('/uploads/'.$data->image)}}" alt="etask image" width="100px"></td>
      <td>
      <a class="btn btn-danger" href="{{route('admin.Employee.feedback.details',$data->employee_nid)}}">View</a>

      </td>


    
    </tr>
    @endforeach
  </tbody>
</table>
@endsection