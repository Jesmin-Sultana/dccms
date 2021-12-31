@extends('admin.master')

@section('main')
<form action="{{route('admin.user.feedback.update',$userfeedback->id)}}" method='post' enctype="multipart/form-data">
@method('PUT')

    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter User Name</label>
    <input required name="user_name" type="text" value="{{$userfeedback->user_name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter User NID</label>
    <input required name="user_nid" type="number" value="{{$userfeedback->user_nid}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Problem Type</label>
    <input required name="problem_type" type="text" value="{{$userfeedback->problem_type}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Area</label>
    <input required name="area" type="text" value="{{$userfeedback->area}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Feedback</label>
    <input required name="feedback" type="text" value="{{$userfeedback->feedback}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image</label>
    <input required name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection