<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopshowEcommerce </title>
    <link rel="stylesheet" href="css/Prodect.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?
   family=poppins:wght@300;400;500;600;700&display=swap">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



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
   <a href="#">About</a>  
   <a href="#">Services</a>
   
   <a href="#">Contact us</a>
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
    
    <!---single prodect  detail-->
    <div class="small-container single-prodect">
        <div class="row">
            <div class="col-2">
                <img src="images/watch.jpg" alt="" width=" 400px" height="400px" id="ProductImg"  >

                            <div class="small-img-row">
                                <div class="small-img-col">
                                    <img src="images/watch-1.jpg" alt="" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="images/watch-2.jpg" alt="" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="images/watch-3.jpg" alt="" width="100%" class="small-img">
                                </div>
                                <div class="small-img-col">
                                    <img src="images/watch-4.jpg" alt="" width="100%" class="small-img">
                                </div>
                            </div>
            </div>
                <div class="col-2">

                <p><a href="index.html" class="home"><h2>home</h2></a> <h3>/watch</h3></p>
                <h3> LS2856 Day and Date Function Steel Strap Quartz Analog Watch - For Men </h3>
                <h3>₹265</h3> <h3> <small class="line">₹1,899 </small><bdi>86% off</bdi></h3>
                 <h4 class="star">4<i class="fa fa-star unchecked"></i>
                     </h4>
                 
                <a href="Advance_Shopping_cart-master/index.php" class="btn"> Add to card</a>
                <h3>  <i class="fa fa-indent"></i></h3><br>
                <p class="detail">  <br>
                    <li>
                     
                </li>
            </div>

        </div>
    </div>
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
    <!----- js prodect gallery------->
    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");
        SmallImg[0].onclick = function() {
            ProductImg.src = SmallImg[0].src;

        }
        SmallImg[1].onclick = function() {
            ProductImg.src = SmallImg[1].src;

        }
        SmallImg[2].onclick = function() {
            ProductImg.src = SmallImg[2].src;

        }
        SmallImg[3].onclick = function() {
            ProductImg.src = SmallImg[3].src;

        }
        
    </script>
</body>

</html>
<?php }else {
	header("Location: login.php");
	exit;
} ?>