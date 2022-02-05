@extends('admin.master')

@section('main')

<h1>User Feedback</h1>
<a href="{{route('user.feedback.form')}}"></a>

<form action="{{route('admin.user.feedback')}}">
<div class="input-group rounded mt-3 mb-2">
  <div class="form-outline">
    <input type="search" id="form1" class="form-control" name="search" placeholder="Search" arial-label="Search" aria-describedby="search-addon" />
    <!-- <label class="form-label" for="form1">Search</label> -->
  </div>
  <button type="submit" class="btn btn-danger">
    <i class="fas fa-search"></i>
  </button>
</div>

</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">NID Number</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Problem Type</th>
      <th scope="col">Area</th>
      <th scope="col">Feedback</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
      @foreach($userfeedback as $data)

    <tr>
      <th scope="row">{{$data->name}}</th>
      <td>{{$data->nid_number}}</td>
      <td>{{$data->phone_number}}</td>
      <td>{{$data->problem_type}}</td>
      <td>{{$data->area}}</td>
      <td>{{$data->feedback}}</td>
      <td><img src = "{{url('/uploads/'.$data->image)}}" alt="userfeedback image" width="100px"></td>
      <td>
        <a class="btn btn-info" href="{{route('admin.user.feedback.details',$data->id)}}">View</a>
</td>
      <a  href="#"></a>
<td>
      <a class="btn btn-success" href="{{route('admin.user.feedback.delete',$data->id)}}">Delete</a>

      </td>




    </tr>
    @endforeach
  </tbody>
</table>

@endsection