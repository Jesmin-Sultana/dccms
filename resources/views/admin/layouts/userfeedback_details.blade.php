@extends('admin.master')


@section('main')
<form class="print_order">
        <input class="btn btn-warning" type="button" onClick="PrintDiv();" value="Print">
    </form>
    <div id="divToPrint">
        <center>
    <h1>User Feedback Details</h1>

    <p>
    <img src = " {{url('/uploads/'.$userfeedback->image)}}" alt="userfeedback image" width="100px">
    </p>
<p> Name: {{$userfeedback->name}}</p>
<p>NID :  {{$userfeedback->nid_number}}</p>
<p>Phone Number:  {{$userfeedback->phone_number}}</p>

<p>User Problem Type: {{$userfeedback->problem_type}}</p>
<p>User Feedback : {{$userfeedback->feedback}}</p>

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
