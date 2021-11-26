@extends('admin.master')
@section('main')
<h1>Report</h1>
<a href="{{route('report.form')}}" class="btn btn-success">Insert Report</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Problem Type</th>
      <th scope="col">NID Number</th>
      <th scope="col">Submitted By</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Area</th>
      <th scope="col">Submitted Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>

@endsection