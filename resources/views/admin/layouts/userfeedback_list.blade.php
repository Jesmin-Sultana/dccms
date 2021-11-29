@extends('admin.master')

@section('main')

<h1>User Feedback</h1>
<a href="{{route('user.feedback.form')}}" class="btn btn-success">Submit Your Feedback</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">User Name</th>
      <th scope="col">User NID</th>
      <th scope="col">Problem Type</th>
      <th scope="col">Area</th>
      <th scope="col">Feedback</th>
      <th scope="col">Image</th>

    </tr>
  </thead>
  <tbody>
      @foreach($userfeedback as $data)
    <tr>
      <th scope="row">{{$data->user_name}}</th>
      <td>{{$data->user_nid}}</td>
      <td>{{$data->problem_type}}</td>
      <td>{{$data->area}}</td>
      <td>{{$data->feedback}}</td>
      <td><img src = "{{url('/uploads/'.$data->image)}}" alt="userfeedback image" width="100px"></td>



    </tr>
    @endforeach
  </tbody>
</table>

@endsection