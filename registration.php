
<!DOCTYPE html>
<html>
<head>
<title>Register here</title>

<!-- CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="./style/style.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	.banner-background{
clip-path: polygon(30% 0%, 70% 0%, 100% 0, 100% 100%, 70% 97%, 35% 100%, 0 96%, 0 0);
	}

</style>
<script src="./js/app.js" type="text/javascript"></script>
</head>
<body>
<?php
	include "nav.php";

?>
		<main class="jumbotron primary-background  banner-background">
		
		<div class="container">
			<div class="col-md-6 offset-md-3">
				<div class="card">
					<div class="card-header  text-center primary-background text-white">
					<span class="fa fa-user-circle fa-3x"></span>
					<br>
						<p>Register here</p>
					</div>
					
					<div class="card-body">
						<form id="reg-form"  method="post"  name="rForm" onsubmit="" action="userstore.php">
							<div class="form-group">
    								<label for="exampleInputEmail1">User Name</label>
										<input name="username"  type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter name" required>
										<div class="error" id="unamErr"></div>
  								</div>						
						
  								<div class="form-group">
    								<label for="exampleInputEmail1">Email address</label>
										<input name="user_email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
										<div class="error" id="emailErr"></div>
  								</div>
  
  								<div class="form-group">
    								<label for="exampleInputPassword1">Password</label>
									<input name="user_password"type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
									<div class="error" id="passErr"></div>
								  </div>
								  
								  <div class="form-group">
    								<label for="phone">Mobile Number</label>
									<input name="mnum" type="number" class="form-control" id="mnum" placeholder="Mobile Number" required>
									<div class="error" id="mobileErr"></div>
  								</div>
  								
  								<div class="form-group">
    								<label for="gender">Select Gender </label>
    								<br>
    								<input type="radio"  id="gender" name="gender" value="male" required>Male
									<input type="radio"  id="gender" name="gender" value="female" required>Female
									<div class="error" id="genErr"></div>
  								</div>
  				
  
  								<div class="form-check">
    								<input name="check" type="checkbox" class="form-check-input" id="exampleCheck1" value="yes">
    								<label class="form-check-label" for="exampleCheck1">Agree terms and conditions</label>
    								<div class="error" id="checkErr"></div>
  								</div>
  								<br>
  								
  								<div class="container text-center" id="loader" style="display:none">
  								<span class="	fa fa-refresh fa-spin  fa-3x"></span>
  									<h4>Please Wait...</h4>
  								</div>
  								<button type="submit" id="submit-btn" class="btn  btn-outline-light btn-lg primary-background text-white " onclick="validateReg()">Submit</button>
							</form>
					</div>	
					
					<div class="card-footer">
					
					</div>				
				</div>
			</div>
		</div>
	</main>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--  <script type="text/javascript" src="js/myjs.js"></script> -->

</body>
</html>
















































