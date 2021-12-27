@extends('admin.master')


@section('main')
<form class="print_order">
        <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
    </form>
    <div id="divToPrint">

    <h1>User Feedback Details</h1>

    <p>
    <img src = "{{url('/uploads/'.$etask->image)}}" alt="etask image" width="100px">
    </p>
<p>Employee NID Number: {{$etask->employee_nid}}</p>
<p>Employee Name: {{$etask->employee_name}}</h4></p>
<p>User NID: {{$etask->user_nid}}</p>
<p>User Name: {{$etask->user_name}}</p>
<p>Problem Area: {{$etask->problem_area}}</p>
<p>Work Type: {{$etask->work_type}}</p>
<p>Feedback: {{$etask->feedback}}</p>





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
