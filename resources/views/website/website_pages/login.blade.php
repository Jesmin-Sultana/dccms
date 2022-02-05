<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<!-- <div class="container">
<br>  <p class="text-center">More bootstrap 4 components on <a href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com</a></p>
<hr> -->


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<!-- <a href="" class="float-right btn btn-outline-primary mt-1">Log In</a> -->
	<center><h4 class="card-title mt-2">Enter Your Information</h4></center>
</header>



<article class="card-body">
<form action="{{route('user.do.login')}}" method='post'>
	@csrf

	<!-- <div class="form-group">
		<label>NID Number</label>
		<input name="nid_number" type="number" class="form-control" placeholder="">
	</div> -->
	<!-- <div class="form-group">
		<label>Name</label>
		<input name="name" type="text" class="form-control" placeholder="">
	</div>
	<div class="form-group">
		<label>NID Number</label>
		<input name="nid_number" type="number" class="form-control" placeholder="">
	</div>  -->
	<!-- form-group end.// -->

	<div class="form-group">
		<label>Email</label>
		<input name="email" type="email" class="form-control" placeholder="">
	</div>

    <!-- <div class="form-group">
		<label>Phone Number</label>
		<input name="phone_number" type="number" class="form-control" placeholder="">
	</div> -->

    <div class="form-group">
		<label>password</label>
	    <input  class="form-control" name="password" type="password">
	</div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Log In</button>
    </div> <!-- form-group// -->      
    <!-- <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                           -->
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Have an account? <a href="{{route('user.registration')}}">Sign Up</a></div>
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