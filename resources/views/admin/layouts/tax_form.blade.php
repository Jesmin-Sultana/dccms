@extends('admin.master')

@section('main')


<form action="{{route('tax.store')}}"method='post'>
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your TIN Number</label>
    <input name="tin_number" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   </div>
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
    <label for="exampleInputEmail1" class="form-label">Enter Your Tax Amount</label>
    <input name="tax_amount" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Your Status</label>
    <input name="status"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   </div>
  
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection