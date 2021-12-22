@extends('admin.master')


@section('main')
    <h1>User Feedback Details</h1>

    <p>
    <img src = " {{url('/uploads/'.$userfeedback->image)}}" alt="userfeedback image" width="100px">
    </p>
<p>User Name: {{$userfeedback->user_name}}</p>
<p>User NID:  {{$userfeedback->user_nid}}</p>
<p>User Problem Type: {{$userfeedback->problem_type}}</p>
<p>User Feedback : {{$userfeedback->feedback}}</p>


   

@endsection
