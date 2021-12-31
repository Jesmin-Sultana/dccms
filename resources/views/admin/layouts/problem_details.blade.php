@extends('admin.master')


@section('main')
    <h1>Objection Info Details</h1>

    
<p>NID Number: {{$problem->nid_number}}</p>
<p>Name:{{$problem->name}}</span></h4></p>
<p>Phone Number: {{$problem->phone_number}}</p>
<p> Area: {{$problem->area}}</p>
<p> Description of Problem: {{$problem->description_problem}}</p>
<p> Date: {{$problem->date}}</p>




<!DOCTYPE html>
<html>
<body>

<h1>Select an Employee</h1>

<!-- <p>The select element is used to create a drop-down list.</p> -->

<form action="/action_page.php">
  <label for="employee">Choose an employee:</label>
  <select name="problem" id="problem">
    <option value="hira">Hira</option>
    <option value="jesmin">Jesmin</option>
    <option value="jabib">Jabib</option>
    <option value="mira">Mira</option>
  </select>
  <br><br>
  <!-- <input type="submit" value="Submit"> -->
  <a href="#" class="btn btn-danger">Submit</a>

</form>

<p>Click the "Submit" button and the form-data will be sent to a page on the Employee".</p>

</body>
</html>




@endsection





