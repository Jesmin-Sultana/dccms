@extends('admin.master')

@section('main')

<form action="{{route('usertable.store')}}"method='post'>
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your NID Number</label>
    <input name="nid_number" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Phone Number</label>
    <input name="phone_number" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Gender</label>
    <input name="gender" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Address</label>
    <input name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Problem Type</label>
    <select name="problem_type" id="problem_type">
    <option value="electricity">Electricity</option>
    <option value="water">Water</option>
    <option value="gas">Gas</option>
    <option value="street">Street</option>
    <option value="street">Mosquito</option>
    <option value="street">Waterlogging</option>
    <option value="street">Garbage</option>
    <option value="street">Sewage</option>




  </select>
    <!-- <input name="problem_type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Application Type</label>
    <input name="application_type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection