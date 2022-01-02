@extends('admin.master')

@section('main')
<a href="{{route('admin.typeproblem.form')}}" class="btn btn-danger">Add Problem</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Problem Type</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
  @foreach($typeproblems as $data)

    <tr>
      <th scope="row">{{$data->problem_type}}</th>
      <td>{{$data->description}}</td>
      
    </tr>
    @endforeach

   
  </tbody>
</table>


@endsection