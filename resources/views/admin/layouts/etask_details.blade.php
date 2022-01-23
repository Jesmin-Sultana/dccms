@extends('admin.master')


@section('main')
<form class="print_order">
        <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
    </form>
    <div id="divToPrint" style="margin-left:230px;">

    <h1>Employee Feedback Details</h1>

    <div style="margin-left:98px;">


    <p>
    <img src = "{{url('/uploads/'.$etask->image)}}" alt="etask image" width="100px">
    </p>

    <p>Employee Name: {{$etask->employee->employee_name}}</h4></p>
    <p>Problem Area: {{$etask->problem_area}}</p>
    <p>Work Type: {{$etask->work_type}}</p>
    <p>Feedback: {{$etask->feedback}}</p>
    </div>
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
