<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?><!DOCTYPE html>
 <html lang="en">
 
 <head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>shopshowEcommerce </title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?
	family=poppins:wght@300;400;500;600;700&display=swap">
 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
	<body>
	<header class="header">
 
	   <a href="home.php" class="logo"> <i class="fas fa-store"></i>Showshop </a>
 
	   <form action="" class="search-form">
		   <input type="search" id="search-box" placeholder="search here...">
		   <label for="search-box" class="fas fa-search"></label>
	   </form>
 
	   <div class="icons">
		  
		   <div id="search-btn" class="fas fa-search" class="icon"></div>
		    
		   <a href="#" class="fas fa-heart"  class="icon"></a>
		   <a href="Advance_Shopping_cart-master/cart.php " class="fas fa-shopping-cart" class="icon" ></a>
		    <button class="openbtn" onclick="openNav()" ><a href="#" class="fas fa-user" class="icon"></a>☰</button>  
		   <div id="mySidepanel" class="sidepanel">
			 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a>
			 <br><h5 align="center" > <?=$_SESSION['fname']?></h5>
			 <a href="home.php">Home</a>
			 <a href="about.php">About</a>  
			 <a href="#">Services</a>
			 
			 <a href="contact.php">Contact us</a>
			 <a href="login.php">logout</a>
		   </div>
		   
			
			  
		   
	   </div>
 
   </header>
   <script>
	function openNav() {
	  document.getElementById("mySidepanel").style.width = "250px";
	}
	
	function closeNav() {
	  document.getElementById("mySidepanel").style.width = "0";
	}
	</script>
	 
 <!---sider part-->
 <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-inner" data-bs-interval="50">
	  <div class="carousel-item active" data-bs-interval="1000">
		<img src="images/watch-banner.jpg" class="d-block w-100" alt="...">
	  </div>
	  <div class="carousel-item" data-bs-interval="1000">
		<img src="images/background2.jpg" class="d-block w-100" alt="...">
	  </div>
	  <div class="carousel-item" data-bs-interval="1000">
		<img src="images/background1.jpg" class="d-block w-100" alt="...">
	  </div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
	  <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
	  <span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
	  <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
	  <span class="visually-hidden">Next</span>
	</button>
  </div>
	<!---feature categories-->
 
 
	<div class="categories">
	   <div class="small-container">
		  <div class="row">
			 <div class="col-3">
				<a href="prodect.php"><img src="images/realme.jpg" alt="" height="200px" width="200px"></a>
 
			 </div>
			 <div class="col-3">
				<a href="prodect2.php"><img src="images/headphone.jpg" alt="" height="200px" width="200px"></a>
 
			 </div>
			 <div class="col-3">
				<a href="prodect3.php"><img src="images/watch.jpg" alt="" height="200px" width="200px"></a>
 
			 </div>
			 <div class="col-3">
			   <a href="prodect4.php"> <img src="images/kettle.jpg" alt="" height="200px" width="200px"></a>
 
			 </div>
			 <div class="col-3">
			   <a href="prodect5.php"> <img src="images/camera.jpg" alt="" height="200px" width="200px"></a>
 
			 </div>
			 <div class="col-3">
				<a href="prodect6.php"><img src="images/charger.jpg" alt="" height="200px" width="200px"></a>
 
			 </div>
		  </div>
	   </div>
	</div>
	 
	<!---feature prodect categories-->
	<div class="small-container">
	   <h3 class="title">feature prodect</h3>
	   <div class="row">
		  <div class="col-3">
			 <a href="prodect.php"><img src="images/realme.jpg" alt="" height="200px" width="200px"></a>
			 <h4>realme C33 </h4>
			 <div class="rating">
				<i class="fa fa-star"></i>
 
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-alt"></i>
			 </div>
			<h3>  ₹8,999</h3> <h5>  <strike style="color:red"> 11,999 </strike> </small><bdi>25% off</bdi></h5>
		  </div>
		  <div class="col-3">
			 <a href="prodect2.php"><img src="images/headphone.jpg" alt="" height="200px" width="200px"></a>
			 <h4>truke Buds</h4>
			 <div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-alt"></i>
			 </div>
			 <h3> ₹1,099  </h3> <h5>  <strike style="color:red"> 3,499  </strike> </small><bdi>68% off</bdi></h5>
		  </div>
		  <div class="col-3">
		  <a href="prodect3.php">   <img src="images/watch.jpg" alt="" height="200px" width="200px"></a>
			 <h4>watch</h4>
			 <div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-alt"></i>
			 </div>
			 <h3>₹265</h3> <h5>  <strike style="color:red"> 1,899 </strike> </small><bdi>86% off</bdi></h5>
		  </div>
		  <div class="col-3">
		  <a href="prodect4.php"><img src="images/kettle.jpg" alt="" height="200px" width="200px"></a>
			 <h4> MILTON GO Electro 2000 Electric Kettle  </h4>
			 <div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-alt"></i>
			 </div>
			 <h3>₹1,279</h3> <h5>  <strike style="color:red"> 1,465 </strike> </small><bdi>12% off</bdi></h5>
		  </div>
		  <div class="col-3">
			<a href="prodect5.php"> <img src="images/camera.jpg" alt="" height="200px" width="200px"></a>
			 <h4>SONY ZV-E10L Mirrorless Camera </h4>
			 <div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-alt"></i>
			 </div>
			 <h3>₹61,490</h3> <h5>  <strike style="color:red">69,990 </strike> </small><bdi>12% off</bdi></h5>
		  </div>
		  <div class="col-3">
			 <a href="prodect6.php"><img src="images/charger.jpg" alt="" height="200px" width="200px"></a>
			 <h4> Prifakt 10 W 2.4 A </h4>
			 <div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-alt"></i>
			 </div>
			 <h3> ₹265</h3> <h5>  <strike style="color:red"> 1,899 </strike> </small><bdi>71% off</bdi></h5>
		  </div>
	   </div>
	</div>
  
	<!---lasted prodect categories-->
	<div class="small-container">
	   <h3 class="title">latest prodect</h3>
	   <div class="row">
		  <div class="col-3">
			 <a href="prodect1.php"><img src="images/realme.jpg" alt="" height="200px" width="200px" ></a>
			 <h4>realme C33</h4>
			 <div class="rating">
				<i class="fa fa-star"></i>
 
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-alt"></i>
			 </div>
			 <h3>  ₹8,999</h3> <h5>  <strike style="color:red"> 11,999 </strike> </small><bdi>25% off</bdi></h5>
		  </div>
		  <div class="col-3">
			<a href="prodect2.php"> <img src="images/headphone.jpg" alt=""  height="200px" width="200px"></a>
			 <h4>truke Buds</h4>
			 <div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
 
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-alt"></i>
			 </div>
			 <h3>  ₹1,099</h3> <h5>  <strike style="color:red"> 3,499</strike> </small><bdi>68% off</bdi></h5>
		  </div>
		  <div class="col-3">
			<a href="prodect3.php"> <img src="images/watch.jpg" alt=""  height="200px" width="200px"></a>
			 <h4> </h4>
			 <div class="rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-alt"></i>
			 </div>
			 <h3>  ₹265</h3> <h5>  <strike style="color:red"> ₹1,099 </strike> </small><bdi>86% off</bdi></h5>
		  </div>
	   </div>
	</div>
	 
	
	<!----------testimonial ---------->
	<div class="testimonial">
	   <div class="small-container">
		 <h1 align="center">reviews</h1>
		  <div class="row">
			 <div class="col-3">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, nostrum?</p>
				<div class="rating">
				   <i class="fa fa-star"></i>
				   <i class="fa fa-star"></i>
				   <i class="fa fa-star"></i>
				   <i class="fa fa-star"></i>
				   <i class="fa fa-star-half-alt"></i>
				</div>
				<a href=""><img src="images/man.png" alt="" height="80px" width="100px"></a>
				<h3>......</h3>
			 </div>
			 <div class="col-3">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, nostrum?</p>
				<div class="rating">
				   <i class="fa fa-star"></i>
				   <i class="fa fa-star"></i>
				   <i class="fa fa-star"></i>
				   <i class="fa fa-star"></i>
				   <i class="fa fa-star-half-alt"></i>
				</div>
				<img src="images/man.png" alt="" height="80px" width="100px">
				<h3>......</h3>
			 </div>
			 <div class="col-3">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, nostrum?</p>
				<div class="rating">
				   <i class="fa fa-star"></i>
				   <i class="fa fa-star"></i>
				   <i class="fa fa-star"></i>
				   <i class="fa fa-star"></i>
				   <i class="fa fa-star-half-alt"></i>
				</div>
				<img src="images/man.png" alt="" height="80px" width="100px">
				<h3>......</h3>
			 </div>
 
		  </div>
	   </div>
	</div>
	<!-- icons section starts  -->
 
  <section class="icons-container">
 
	<div class="icons">
	  <i class="fas fa-shipping-fast"></i>
	  <div class="content">
		<h3>free shipping</h3>
		<p>order over ₹1000</p>
	  </div>
	</div>
 
	<div class="icons">
	  <i class="fas fa-lock"></i>
	  <div class="content">
		<h3>secure payment</h3>
		<p>100% secure payment</p>
	  </div>
	</div>
 
	<div class="icons">
	  <i class="fas fa-redo-alt"></i>
	  <div class="content">
		<h3>easy returns</h3>
		<p>10 days returns</p>
	  </div>
	</div>
 
	<div class="icons">
	  <i class="fas fa-headset"></i>
	  <div class="content">
		<h3>24*7 support</h3>
		<p>call us anytime</p>
	  </div>
	</div>
 
  </section>
  </section>
  <!-- icons section ends -->
 
	<!----footer -->
	<footer class="footer">
	   <div class="footer__addr">
		 <h1 class="footer__logo">Showshop</h1>
			 
		 <h3>Contact</h3>
		 
		 <address>
		   india uttrakhand<br>
			   
		   <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
		 </address>
	   </div>
	   
	   <ul class="footer__nav">
		 <li class="nav__item">
		   <h3 class="nav__title">Media</h3>
	 
		   <ul class="nav__ul">
			 <li>
			   <a href="#" class="fab fa-facebook-f"></a>
			 </li>
			 <a href="#" class="fab fa-twitter"></a>
			 <li>
			   <a href="#" class="fab fa-linkedin"></a>
			 </li>
				 
			 <li>
			   <a href="#" class="fab fa-instagram" ></a>
			 </li>
		   </ul>
		 </li>
		 
		 <li class="nav__item">
		   <h3 class="nav__title">extra links</h3>
		   <h3></h3>
			
		   <ul class="nav__ul">
			 <li>
			   <a href="#"> <i class="fas fa-arrow-right"></i> account info </a>
 
			 </li>
			 <a href="#"> <i class="fas fa-arrow-right"></i> ordered items </a>
			 <li>
			   <a href="#"> <i class="fas fa-arrow-right"></i> privacy policy </a>
			 </li>
				 
			 <li>
			   <a href="#"> <i class="fas fa-arrow-right"></i> payment method </a>
			 </li>
			 <li>
			   <a href="#"> <i class="fas fa-arrow-right"></i> our serivces </a>
			 </li>
		   </ul>
		 </li>
		 
		 <li class="nav__item">
		   <h3 class="nav__title">contact info</h3>
			
		   
		   
		   
			
		   <ul class="nav__ul">
			 <li>
			   <a href="#"> <i class="fas fa-phone"></i> +10002030404 </a>
			 </li>
			 
			 <li>
			   <a href="#"> <i class="fas fa-phone"></i> +91976108644 </a>
			 </li>
			 
			 <li>
			   <a href="#"> <i class="fas fa-envelope"></i> Showshop@gmail.com </a>
			 </li>
		   </ul>
		 </li>
	   </ul>
	   
	   <div class="legal">
		 <p>&copy; 2022  created by Sohan Singh Bisht. All rights reserved.</p>
		 
		 <div class="legal__links">
		   <span>Made with <span class="heart">♥</span> remotely from Anywhere</span>
		 </div>
	   </div>
	 </footer>
 </body>
 
 </html>
 

<?php }else {
	header("Location: login.php");
	exit;
} ?>