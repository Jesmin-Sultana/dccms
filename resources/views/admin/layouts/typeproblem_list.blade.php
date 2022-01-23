@extends('admin.master')

@section('main')
<a href="{{route('admin.typeproblem.form')}}" class="btn btn-danger">Add Problem</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Problem Type</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($typeproblems as $data)

    <tr>
      <th scope="row">{{$data->problem_type}}</th>
      <td>{{$data->description}}</td>

      <td>
      <a class="btn btn-danger" href="{{route('admin.problem.type.details',$data->id)}}">View</a>
      <a class="btn btn-success" href="{{route('admin.problem.type.delete',$data->id)}}">Delete</a>

      </td>
      
    </tr>
    @endforeach

   
  </tbody>
</table>


@endsection