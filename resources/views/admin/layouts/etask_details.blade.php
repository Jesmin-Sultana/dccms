@extends('admin.master')


@section('main')
    <h1>User Feedback Details</h1>

    <p>
    <img src = "{{url('/uploads/'.$etask->image)}}" alt="etask image" width="100px">
    </p>
<p>Employee NID Number: {{$etask->employee_nid}}</p>
<p>Employee Name: {{$etask->employee_name}}</h4></p>
<p>User NID: {{$etask->user_nid}}</p>
<p>User Name: {{$etask->user_name}}</p>
<p>Problem Area: {{$etask->problem_area}}</p>
<p>Work Type: {{$etask->work_type}}</p>
<p>Feedback: {{$etask->feedback}}</p>



    

@endsection
