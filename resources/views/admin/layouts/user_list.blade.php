@extends('admin.master')

@section('main')
<center>
<h1>User List</h1>
</center>


<form class="print_order">
        <input class="btn btn-warning" type="button" onClick="PrintDiv();" value="Print">
    </form>
    <div id="divToPrint">



<table class="table">
  <thead>
    <tr>
    <th scope="col">Name</th>
    <!-- <th scope="col">Last Name</th> -->
    <th scope="col">NID Number</th>
    <th scope="col">Email</th>
    <th scope="col">Phone Number</th>
    <th scope="col">Gender</th>
    <th scope="col">City</th>
    <th scope="col">Country</th>
    <th scope="col">Address</th>
    <th scope="col">Role</th>
    <th scope="col">Action</th>




    </tr>
  </thead>
  <tbody>
  @foreach($usertable as $data)

    <tr>
      <th scope="row">{{$data->name}}</th>
      <!-- <td>{{$data->last_name}}</td> -->
      <td>{{$data->nid_number}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phone_number}}</td>
      <td>{{$data->gender}}</td>
      <td>{{$data->city}}</td>
      <td>{{$data->country}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->role}}</td>
      <td>
      <a class="btn btn-warning" href="{{route('admin.user.list.delete',$data->id)}}">Delete</a>

      </td>

      

    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection

<script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://127.0.0.1:8000/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>
