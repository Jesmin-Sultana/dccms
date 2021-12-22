@extends('admin.master')


@section('main')
    <h1>Tax Details</h1>

   
<p>TIN Number: {{$tax->tin_number}}</p>
<p> NID Number: {{$tax->nid_number}}</p>
<p>Name: {{$tax->name}}</p>
<p>Phone Number : {{$tax->phone_number}}</p>
<p>Gender: {{$tax->gender}}</p>
<p>Tax Amount: {{$tax->tax_amount}}</p>
<p>Status: {{$tax->status}}</p>



@endsection
