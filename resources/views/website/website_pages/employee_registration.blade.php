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
	<h4 class="card-title mt-2">For Employee Sign Up</h4>
</header>



<article class="card-body">
<form action="{{route('website.do.employee.registration')}}" method='post'>
    @csrf

    <input type="hidden" value="employee" name="employee_role">


	 <!-- <div class="form-row">
		<div class="col form-group">
			<label>First name </label>   
		  	<input name="first_name" type="text" class="form-control" placeholder="">
		</div>  -->
			  <!-- form-group end.//  -->
		<!-- <div class="col form-group">
			<label>Last name</label>
		  	<input name="last_name" type="text" class="form-control" placeholder=" ">
		 </div>  -->
		 <!-- form-group end.//  -->
	 <!-- </div>  -->
	<!-- form-row end.// --> 
	<div class="form-group">
		<label>Name</label>
		<input name="name" type="text" class="form-control" placeholder="">
	</div>

	<div class="form-group">
		<label>NID Number</label>
		<input name="nid_number" type="number" class="form-control" placeholder="">
	</div> <!-- form-group end.// -->

	<div class="form-group">
		<label>Email</label>
		<input name="email" type="email" class="form-control" placeholder="">
	</div>

    <div class="form-group">
		<label>Phone Number</label>
		<input name="phone_number" type="number" class="form-control" placeholder="">
	</div>



	 <div class="form-group">
			<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" value="Male">
		  <span class="form-check-label" value="Male"> Male </span>
		</label>
		<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" value="Female">
		  <span class="form-check-label" value="Female"> Female</span>
		</label> 
	</div> 
	<!-- form-group end.//  -->
	 <div class="form-row">
		<div class="form-group col-md-6">
		  <label>City</label>
		  <input name="city" type="text" class="form-control">
		</div> 
		<!-- form-group end.//  -->
		<div class="form-group col-md-6">
		  <label>Country</label>
		  <select name="country" id="country" class="form-control"> -->
		    <!-- <option> Choose...</option> -->

             <option selected="">Bangladesh</option>

		     
		  </select>
		</div> 
		<!-- form-group end.//  -->
	 </div> 
	<!-- form-row.//  -->
   
   
   
    <div class="form-group">
		<label>Address</label>
		<input name="address" type="text" class="form-control" placeholder="">
	</div>




	
    <div class="form-group">
		<label>password</label>
	    <input  class="form-control" name="password" type="password">
	</div>

	


    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Register</button>
    </div> <!-- form-group// -->      
    <!-- <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                           -->
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Have an account? <a href="{{route('user.login')}}">Log In</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
