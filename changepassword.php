<!DOCTYPE html>
<html>
<head>
<title>ChangePassword</title>

<!-- CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="style.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	.banner-background{
	clip-path: polygon(30% 0%, 70% 0%, 100% 0, 100% 100%, 68% 93%, 33% 100%, 0 91%, 0 0);
    }
</style>

</head>
<body>
	<main class="d-flex align-items-center primary-background banner-background" style="height: 90vh;">
		<div class="container">
			<div class="row">
				<div class="col-md-4 offset-md-4">
					<div class="card">
						<div class="card-header primary-background text-white text-center">
							<span class="fa fa-user-plus fa-3x"></span>
							<p> Change Your Password </p>
						</div>
						<div>
						    <div class="card-body">
							    <form method="post">
  								    <div class="form-group">
    								    <label for="opass">Old Password</label>
   									    <input name="oldpass" required type="password" class="form-control" id="opass" placeholder="Enter old password" required>
  								    </div>
  
  								    <div class="form-group">
    								<label for="npass">Password</label>
    								<input name="newpass" required type="password" class="form-control" id="npass" placeholder="Enter new password">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="cpass">Password</label>
                                        <input name="cpass" required type="password" class="form-control" id="cpass" placeholder="Confirm new password">
                                    </div>

  
  								    <div class="container text-center">  					
  											<button type="submit" class="btn  btn-outline-light btn-lg primary-background text-white ">Change my password</button>
  								    </div>
							    </form>
						    </div>
					    </div>
				    </div>
			    </div>
		    </div>
		</main>
		<!-- javascript -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--  <script type="text/javascript" src="js/myjs.js"></script> -->
    </body>
</html>