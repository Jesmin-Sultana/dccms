@extends('admin.master')


@section('main')
    <h1>Employee Details</h1>

   
<p>Name: {{$employee->name}}</p>
<p> NID Number: {{$employee->nid_number}}</p>
<p>Address: {{$employee->address}}</p>
<p>Phone Number : {{$employee->phone_number}}</p>
<p>Age: {{$employee->age}}</p>
<p>Gender: {{$employee->gender}}</p>
<p>Working Field: {{$employee->working_field}}</p>



@endsection
