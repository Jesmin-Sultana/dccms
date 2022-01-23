@extends('admin.master')

@section('main')
<center>
<h1>Show Assigned Employee</h1>
<center>
<form class="print_order">
        <input class="btn btn-danger" type="button" onClick="PrintDiv();" value="Print">
    </form>
<div id="divToPrint">
<table class="table">
  <thead>

    <tr>
      <th scope="col">Employee Name</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($data as $assign )

    <tr>
      <th scope="row">{{$assign->employee->employee_name}}</th>


      
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