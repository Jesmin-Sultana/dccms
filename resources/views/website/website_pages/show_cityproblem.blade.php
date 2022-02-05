<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<!-- <div class="container">
<br>  <p class="text-center">More bootstrap 4 components on <a href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com</a></p>
<hr> -->

@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<!-- <a href="" class="float-right btn btn-outline-primary mt-1">Log In</a> -->
	<h4 class="card-title mt-2">Objection Info</h4>
</header>



<article class="card-body">
<form action="{{route('admin.problem.list')}}" method='post'>
    @csrf

	<!-- <div class="form-group">
		<label>NID Number</label>
		<input name="nid_number" type="number" class="form-control" placeholder="">
	</div>
	
	<div class="form-group">
		<label>Name</label>
		<input name="name" type="text" class="form-control" placeholder="">
	</div>

    <div class="form-group">
		<label>Phone Number</label>
		<input name="phone_number" type="number" class="form-control" placeholder="">
	</div> -->
    <div class="form-group">
		<label>Area</label>
		<input required name="area" type="text" class="form-control" placeholder="">
	</div>
	<div class="form-group">
		<label>Problem Type</label>
		<select name="problem_type" id="problem_type">
			@foreach($problem_type as $data)
    <option value="{{$data->id}}">{{$data->problem_type}}</option>
	@endforeach




  </select>
  <br><br>
		<!-- <input name="area" type="text" class="form-control" placeholder=""> -->
	</div>
    <!-- <div class="form-group">
		<label>Descriptopn of Problem</label>
        <br>
		<textarea name="description_problem" type="text" class="form-control" placeholder=""> </textarea>
	</div> -->
    <div class="form-group">
		<label>Date</label>
		<input required name="date" type="text"  id="datepicker" class="form-control datepicker" placeholder="" autocomplete="off">
	</div>

   

    <div class="form-group">
        <button type="submit" class="btn btn-warning">Submit</button>
    </div> <!-- form-group// -->      
    <!-- <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                           -->
</form>
</article> <!-- card-body end .// -->
<!-- <div class="border-top card-body text-center">Have an account? <a href="{{route('user.registration')}}">Sign Up</a></div> -->
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->

<!-- <br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h3 class="text-white mt-3">Bootstrap 4 UI KIT</h3>
<p class="h5 text-white">Components and templates  <br> for Ecommerce, marketplace, booking websites 
and product landing pages</p>   <br>
<p><a class="btn btn-warning" target="_blank" href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com  
 <i class="fa fa-window-restore "></i></a></p>
</div>
<br><br>
</article> -->

<script type="text/javascript">
	$('.datepicker').datepicker({
		minDate:0,
		maxDate: 0,
		dateFormat: 'yy-mm-dd'
	});
</script>