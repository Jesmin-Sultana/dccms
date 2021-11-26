@extends('admin.master')

@section('main')
<h1>Objection Site</h1>
<a href="{{route('problem.form')}}" class="btn btn-dark">Problem Info</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">NID Number</th>
      <th scope="col">Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Area</th>
      <th scope="col">Description of Problem</th>
      <th scope="col">Date</th> 
    </tr>
  </thead>
  <tbody>
      @foreach($problem as $data )
    <tr>
      <th scope="row">{{$data->nid_number}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->phone_number}}</td>
      <td>{{$data->area}}</td>
      <td>{{$data->description_problem}}</td>
      <td>{{$data->date}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection