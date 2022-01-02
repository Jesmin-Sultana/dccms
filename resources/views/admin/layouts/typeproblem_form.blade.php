<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
	<h4 class="card-title mt-2">Problem Type</h4>
</header>



<article class="card-body">
<form action="{{route('admin.type.problem.store')}}" method='post'>
@csrf
	<div class="form-group">
		<label>Problem Type</label>
		<input name="problem_type" type="text" class="form-control" placeholder="">
	</div>
	
	<div class="form-group">
		<label>Description</label>
		<input name="description" type="text" class="form-control" placeholder="">
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
