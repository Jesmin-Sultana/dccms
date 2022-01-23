@extends('admin.master')


@section('main')
<form class="print_order">
        <input class="btn btn-danger" type="button" onClick="PrintDiv();" value="Print">
    </form>
    <div id="divToPrint">
        <center>
    <h1>Employee Details</h1>

   
<p>Name: {{$employee->employee_name}}</p>
<p> NID Number: {{$employee->nid_number}}</p>
<p>Address: {{$employee->address}}</p>
<p>Phone Number : {{$employee->phone_number}}</p>
<p>Gender: {{$employee->gender}}</p>
<p>Working Field: {{$employee->workingfield->problem_type}}</p>
</div>
</center>

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
