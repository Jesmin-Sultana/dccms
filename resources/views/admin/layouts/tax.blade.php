@extends('admin.master')

@section('main')

<h1>Tax List</h1>
<a href="{{route('admin.tax.form')}}" class="btn btn-danger">Tax Record</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">TIN Number</th>
      <th scope="col">NID Number</th>
      <th scope="col">Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Gender</th>
      <th scope="col">Tax Amount</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($tax as $data)
    <tr>
      <th scope="row">{{$data->tin_number}}</th>
      <td>{{$data->nid_number}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->phone_number}}</td>
      <td>{{$data->gender}}</td>
      <td>{{$data->tax_amount}}</td>
      <td>{{$data->status}}</td>
      <td>
      <a class="btn btn-info" href="{{route('admin.tax.details',$data->tin_number)}}">View</a>

      </td>
      <td>
      <a class="btn btn-success" href="{{route('admin.tax.delete',$data->id)}}">Delete</a>

      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>



@endsection