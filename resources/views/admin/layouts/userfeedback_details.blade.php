@extends('admin.master')


@section('main')
    <h1>User Feedback Details</h1>

    <p>
    <img src = " {{url('/uploads/'.$userfeedback->image)}}" alt="userfeedback image" width="100px">
    </p>
<p>User Name: {{$userfeedback->user_name}}</p>
<p>User NID: <h4><span style="color: orange">BDT {{$userfeedback->user_nid}}</span></h4></p>
<p>User Problem Type: {{$userfeedback->problem_type}}</p>
<p>User Feedback : {{$userfeedback->feedback}}</p>


    <lable>User Name:</lable>
    <input type="text" class="form-control" value="{{$userfeedback->name}}">
    <input type="file" class="form-control">

@endsection
