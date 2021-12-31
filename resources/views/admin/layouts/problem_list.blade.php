@extends('admin.master')

@section('main')
<h1>Objection Site</h1>
<a href="{{route('problem.form')}}"></a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">NID Number</th>
      <th scope="col">Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Area</th>
      <th scope="col">Problem Type</th>
      <th scope="col">Description of Problem</th>
      <th scope="col">Date</th> 
      <th scope="col">Action</th> 

    </tr>
  </thead>
  <tbody>
      @foreach($problem as $data )
    <tr>
      <th scope="row">{{$data->nid_number}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->phone_number}}</td>
      <td>{{$data->area}}</td>
      <td>{{$data->problem_type}}</td>
      <td>{{$data->description_problem}}</td>
      <td>{{$data->date}}</td>

      <td>
      <a class="btn btn-dark" href="{{route('admin.problem.info.details',$data->nid_number)}}">View</a>

      </td>
      <td>
      <a class="btn btn-warning" href="{{route('admin.problem.edit',$data->id)}}">Edit</a>

      </td>
      <td>
      <a class="btn btn-success" href="{{route('admin.problem.info.delete',$data->id)}}">Delete</a>


      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection