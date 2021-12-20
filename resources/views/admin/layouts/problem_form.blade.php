@extends('admin.master')
@section('main')
<h1>Please Fill Up This Form</h1>
<form action="{{route('problem.store')}}"method='post'>
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ennter Your NID Number</label>
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
    <label for="exampleInputEmail1" class="form-label">Enter Your Area</label>
    <input name="area" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Problem Type</label>
    <input name="problem_type" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Describe Your Problem</label>
    <br>
    <textarea id="description_problem" name="description_problem" rows="4" cols="100">  </textarea>
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Submitted Date</label>
    <input name="date" type="date" id="" name="">
</div>


  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection