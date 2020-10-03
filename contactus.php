
<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<!-- CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="./style/style.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    body{
        background-image : url(./img/eback.jpg);
    }
	.banner-background{
	clip-path: polygon(30% 0%, 70% 0%, 100% 0, 100% 100%, 68% 93%, 33% 100%, 0 91%, 0 0);
    }
</style>

</head>
<body>
	<?php
	include "nav.php";
    ?>
	<main class="jumbotron d-flex align-items-center primary-background banner-background " >
		<div class="container" >
			
			<div class="row">
				<div class="col-md-4 offset-md-4">
					<div class="card">
						<div class="card-header primary-background text-white text-center">
							<span class="fa fa-user-plus fa-3x"></span>
							<p> Contact US </p>
						</div>
						<div>
						    <div class="card-body">
							    <form method="post"  name="contactform" >
                                <div class="form-group">
    								    <label for="fullName">Full Name</label>
   									    <input name="fname"  type="text" class="form-control" id="fname1" placeholder="Enter full name">
  								    </div>
  								    <div class="form-group">
    								    <label for="Email1">Email address</label>
   									    <input name="email"  type="text" class="form-control" id="Email1" placeholder="Enter email">
  								    </div>
                                    <div class="form-group">
    								    <label for="customer">Are you an existing customer ?</label><br>
                                        <input type="radio"  id="cust" name="cust" value="yes" required>Yes &nbsp;
									    <input type="radio"  id="cust" name="cust" value="no" required>No
  								    </div>
                                    <div class="form-group">
                                        <textarea name="about"  class="form-control" id=""  rows="5" placeholder="Enter something about yourself"></textarea>
                                    </div>
  								    <div class="container text-center">  					
  										<button type="submit" class="btn  btn-outline-light btn-lg primary-background text-white " id="btnsub" >Submit</button>
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