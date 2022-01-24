
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Account</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>

<style>
body{margin-top:20px;
color: #000000;
    background: #800000;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
}
.account-settings .about {
    margin: 1rem 0 0 0;
    font-size: 0.8rem;
    text-align: center;
}
.card {
    background: #FFFFFF;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}
.form-control {

    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
   
    color: #bcd0f7;
}

</style>



<div class="container">
	<div class="row gutters">
	<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
		<div class="card h-100">
			<div class="card-body">
				<div class="account-settings">
					<div class="user-profile">
						<div class="user-avatar">
							<img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Maxwell Admin">
						</div>
						<h5 class="user-name">{{auth()->user()->name}}</h5>
						<h6 class="user-email">{{auth()->user()->email}}</h6>
					</div>
					<div class="about">
						<h5 class="mb-2 text-primary">About</h5>
						<p>Ordinary People.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
		<div class="card h-100">
			<div class="card-body">

			<h3><a class="h3 mb-4 page-title" style="color:black" href="{{route('website.home')}}">Back to Home</a></h3>
			<form action="{{route('user.website.profile.store',auth()->user()->id)}}" method='post'>
				@method('PUT')
				@csrf
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<h6 class="mb-3 text-primary">Personal Details</h6>
					</div>
					
					
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="fullName">First Name</label>
							<input name="first_name" type="text" class="form-control" id="first_name" placeholder="Enter first name">
							<br><br>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="eMail">Last Name</label>
							<input name="last_name" type="text" class="form-control" id="last_name" placeholder="Enter last name">
							<br><br>

						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="phone">NID Number</label>
							<input name="nid_number" type="number" class="form-control" id="nid_number" placeholder="Enter nid number">
							<br><br>

						</div>
					 </div>  



					<!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="website">Website URL</label>
							<input type="url" class="form-control" id="website" placeholder="Website url">
						</div>
					</div> -->


					
				</div>
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<h6 class="mb-3 text-primary"></h6>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="Street">Email</label>
							<input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
							<br><br>

						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="Street">Phone Number</label>
							<input name="phone_number" type="number" class="form-control" id="phone_number" placeholder="Enter phone number">
							<br><br>

						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="ciTy">Gender</label>
							<input name="gender" type="text" class="form-control" id="gender" placeholder="Enter gender">
							<br><br>

						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="sTate">City</label>
							<input name="city" type="text" class="form-control" id="city" placeholder="Enter city">
							<br><br>

						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="zIp">Country</label>
							<input name="country" type="text" class="form-control" id="country" placeholder="country">
							<br><br>

						</div>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="sTate">Address</label>
							<input name="address" type="text" class="form-control" id="address" placeholder="Enter address">
							<br><br>

						</div>
					</div>


					<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<h6 class="mb-3 text-primary">Password Setting</h6>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="fullName"> Password</label>
							<input name="password" type="text" class="form-control" id="current_password" placeholder="Enter current password">
							<br><br>
						</div>
					</div>
					<!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="fullName">Confirm Password</label>
							<input name="confirm_password" type="text" class="form-control" id="confirm_password" placeholder="Enter confirm password">
							<br><br>
						</div>
					</div> -->






				</div>
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="text-right">
							<!-- <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button> -->
							<!-- <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button> -->
							<button  type="submit" class="btn btn-danger">Update profile</button>

						</div>
					</div>
				</div>
				</form>
<br><br>
<h1>Problem List</h1>
@if(auth()->user()->role == "employee")
<table class="table">
  <thead>
    <tr>
	<th scope="col">NID Number</th>
	
      <th scope="col">Name</th> <br>
      <th scope="col">Phone Number</th>
      <th scope="col">Area</th>
      <th scope="col">Problem Type</th>
      <!-- <th scope="col">Description of Problem</th> -->
      <th scope="col">Date</th> 
      <th scope="col">Action</th> 
    </tr>
  </thead>
  <tbody>
      @foreach($problem as $data )
    <tr>
      <th scope="row">{{$data->nid_number}}</th>
	  <!-- change -->
      <td>{{$data->name}}</td>

      <td>{{$data->phone_number}}</td>
      <td>{{$data->area}}</td>

      <td>{{optional($data->problemtype)->problem_type}}</td>

      <!-- <td>{{$data->description_problem}}</td> -->
      <td>{{$data->date}}</td>

      <td>
      <a class="btn btn-dark" href="{{route('website.problem.info.details',$data->id)}}" class="btn btn-danger">View</a>
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
@else
				<table class="table">
  <thead>
    <tr>
	<th scope="col">NID Number</th>
	
      <th scope="col">Name</th> <br>
      <th scope="col">Phone Number</th>
      <th scope="col">Area</th>
      <th scope="col">Problem Type</th>
      <!-- <th scope="col">Description of Problem</th> -->
      <th scope="col">Date</th> 
      <th scope="col">Action</th> 
    </tr>
  </thead>
  <tbody>
      @foreach($problem as $data )
    <tr>
      <th scope="row">{{$data->nid_number}}</th>
	  <!-- change -->
      <td>{{$data->name}}</td>

      <td>{{$data->phone_number}}</td>
      <td>{{$data->area}}</td>

      <td>{{optional($data->problemtype)->problem_type}}</td>

      <!-- <td>{{$data->description_problem}}</td> -->
      <td>{{$data->date}}</td>

      <td>
      <a class="btn btn-dark" href="{{route('website.problem.info.details',$data->id)}}" class="btn btn-danger">View</a>
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
@endif

				
			</div>


		</div>
	</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>





 


