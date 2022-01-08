@extends('admin.master')

@section('main')
<h1>Show Assigned Employee</h1>
<table class="table">
  <thead>

    <tr>
      <th scope="col">Employee Name</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $assign )

    <tr>
      <th scope="row">{{$assign->employee->employee_name}}</th>
      <td>{{$assign->status}}</td>
    </tr>
    @endforeach

    
  </tbody>
</table>

@endsection