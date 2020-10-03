<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="style/style.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	.banner-background{
	
	clip-path: polygon(30% 0%, 70% 0%, 100% 0, 100% 100%, 68% 93%, 33% 100%, 0 91%, 0 0);
	}

</style>
</head>
<body>


<!-- navbar -->

<?php
    include "nav.php";
?>

<!-- //banner -->

	<div class="container-fluid p-0 m-0 //border  akhi screen ma lavva mate banner-background"> 
		<div class="jumbotron primary-background text-white" >
		<div class="container ">
			<h3 class="display-3">welcome to store</h3>
			
			<a href="registration.php" class= "btn btn-outline-light btn-lg"><span class="fa fa-user-plus"></span> start ! Shopping</button>
			<a href="login.php" class= "btn btn-outline-light btn-lg"> <span class="fa fa-user-circle fa-spin	"></span> Login</a>
			
		</div>
	</div>
</div>

	<!-- cards -->
	
<div class="container">
	<div class="row  mb-4">
		
		<div class="col-md-4">
			<div class="card">
  				<div class="card-body">
    				<h5 class="card-title">Mobiles and Accessories</h5>
    				<p class="card-text">
						Smartphones for all budgets,Top selling vivo smartphones,Bestselling OPPO smartphones
									   
					</p>
   					 <a href="mobile.php" class="btn primary-background text-white">Read More</a>
  				</div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="card">
  				<div class="card-body">
    				<h5 class="card-title">Kitchen and Tools</h5>
    				<p class="card-text">All Kitchen items and tools avilable at actractive prise. Be your own kitchen queen</p><br>
   					 <a href="#" class="btn primary-background text-white">Read More</a>
  				</div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="card">
  				<div class="card-body">
    				<h5 class="card-title">Women's Fashion</h5>
    				<p class="card-text">Most-wanted wardrobe basics,Women's collections,Luggage, sunglasses & more.</p><br>
   					 <a href="#" class="btn primary-background text-white">Read More</a>
  				</div>
			</div>
		</div>
		
		</div>
		
		
	<div class="row mb-2">
		
		<div class="col-md-4">
			<div class="card">
  				<div class="card-body">
    				<h5 class="card-title">Men's Fashion</h5>
    				<p class="card-text">Timeless wardrobe basics,It’s new & it’s now – launching AW'20 collection,Explore all top wear | Up to 70% off.</p><br>
   					 <a href="#" class="btn primary-background text-white">Read More</a>
  				</div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="card">
  				<div class="card-body">
    				<h5 class="card-title">Books</h5>
    				<p class="card-text">With over 12 million books.Browse through variety of genres such as Fiction, Self help, and much more.
		 . Now available: Audible Audiobooks & more, Audible Membership</p>
   					 <a href="#" class="btn primary-background text-white">Read More</a>
  				</div>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="card">
  				<div class="card-body">
    				<h5 class="card-title">Home Decore</h5>
    				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><br>
   					 <a href="#" class="btn primary-background text-white">Read More</a>
  				</div>
			</div>
		</div>
		
		</div>
		
	</div>

<!-- javascript -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--  <script type="text/javascript" src="js/myjs.js"></script> -->

</body>
</html>

