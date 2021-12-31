@extends('admin.master')
@section('main')
<h1>Please Fill Up This Form</h1>

<form action="{{route('admin.problem.info.update', $problem->id)}}" method='post'>
@method('PUT')

    @csrf>
    
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your NID Number</label>
    <input name="nid_number"  value="{{$problem->nid_number}}" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Name</label>
    <input name="name" value="{{$problem->name}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Phone Number</label>
    <input name="phone_number" value="{{$problem->phone_number}}" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Area</label>
    <input name="area" value="{{$problem->area}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Problem Type</label>
    <input name="problem_type" value="{{$problem->problem_type}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Describe Your Problem</label>
    <br>
    <textarea id="description_problem" name="description_problem" value="{{$problem->description_problem}}" rows="4" cols="100">  </textarea>
    </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Submitted Date</label>
    <input name="date" value="{{$problem->date}}" type="date" id="" name="">
</div>


  
  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection