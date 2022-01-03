@extends('admin.master')


@section('main')

<form class="print_order">
        <input class="btn btn-danger" type="button" onClick="PrintDiv();" value="Print">
    </form>
<div id="divToPrint">
    <h1>Objection Info Details</h1>

        
    <p>NID Number: {{$problem->nid_number}}</p>
    <p>Name:{{$problem->name}}</span></h4></p>
    <p>Phone Number: {{$problem->phone_number}}</p>
    <p> Area: {{$problem->area}}</p>
    <p> Problem Type: {{$problem->problemtype->problem_type}}</p>
    <p> Description of Problem: {{$problem->description_problem}}</p>
    <p> Date: {{$problem->date}}</p>
</div>







<h1>Select an Employee</h1>

<!-- <p>The select element is used to create a drop-down list.</p> -->

<form action="{{route('admin.do.assign.employee',$problem->id)}}" method='post'>
@method('PUT')
@csrf

  <label for="employee_name">Choose an Employee Name:</label>
  <select name="employee_name" id="employee_name">
  @foreach($employee as $emp)
    <option value="{{$emp->id}}">{{$emp->employee_name}}</option>
    @endforeach
  </select>
  <br><br>




  
  <input type="submit" value="Submit">
  <!-- <a href="#" class="btn btn-danger">Submit</a> -->

</form>

<p>Click the "Submit" button and the form-data will be sent to a page on the Employee".</p>






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
