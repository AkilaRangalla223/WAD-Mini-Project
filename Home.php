<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: account.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: account.php");
  }
?>



<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cakes by Roo-Your favourite taste </title>
    <link rel="stylesheet" href="css/Home.css" type="text/css">

    <link rel="stylesheet" href="css/menu.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/lightslider.css"/>
    <!--Jquery-->
<script type="text/javascript" src="js/JQuery3.3.1.js"></script>
<script type="text/javascript" src="js/lightslider.js"></script>
    

   
    
</head>

<body >
  <!---------------------------------------
------------header---------------
---------------------------------------->  
  <header>
    <nav class="main-nav">
      <div class="logo">
        <a href="Home.php"><img class="mo" src="img/logo.png" ></a>
      </div>
      <div class="hamburger-menu">
        <span class="bar"></span>
      </div>
      <ul class="nav-list">
        <li class="nav-item">
          <a href="Home.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="Menu.php" class="nav-link">Menu</a>
        </li>
        <li class="nav-item">
          <a href="account.php" class="nav-link">Account</a>
        </li>
        <li class="nav-item">
          <a href="cart.php" class="nav-link">Cart</a>
        </li>
        <li class="nav-item">
          <a href="About.php" class="nav-link">About</a>
        </li>

      </ul>
      
    </nav>
  </header>
  
   
 





<!---------------------------------------
----------- nav-bar ends ----------------
---------------------------------------->

 
<!---------------------------------------
----------- insert a heading ----------------
---------------------------------------->
 <section class="hero">
    <div class="hero-clipped">
      <div class="hero-textbox">
        <div class="logo">
        <a href="Home.php"><img class="mon" src="img/logo.png" ></a>
      </div>
        
        <h1 class="main-heading">Cakes By Roo</h1>
        <h2 class="sub-heading">Learn about our product</h2>
        <a href="#" class="cta-btn">Learn More</a>
      </div>
    </div>
   
 </section>
 <section>
   <center>
<div class="content" style="background-color: crimson;">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p ">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <button ><a href="Home.php?logout='1'" style="color: red;">logout</a></button> </p>
    <?php endif ?>
</div>
</center>
</section>

    

<section>
      <div class="gal">
         <h1>CAKE GALLERY</h1>
      </div>
    <div class="container">
     
     
    <!--slider------------------->
    <ul id="autoWidth" class="cs-hidden">
    <!--1------------------------------>
  <li class="item-a">
    <!--slider-box-->
    <div class="box">
    <p class="marvel">Black Forest Cake</p>
    <!--model-->
    <img class="model" src="img/cake01.png">
    <!--details-->
    <div class="details">
      <p>price</p>
    </div>
    
    </div>
    </li>
    <!--2------------------------------>
  <li class="item-a">
    <!--slider-box-->
    <div class="box">
    <p class="marvel">Black Forest Cake</p>
    <!--model-->
    <img class="model" src="img/cake01.png">
    <!--details-->
    <div class="details">
      <p>price</p>
    </div>
    
    </div>
    </li>
    <!--3------------------------------>
  <li class="item-a">
    <!--slider-box-->
    <div class="box">
    <p class="marvel">Black Forest Cake</p>
    <!--model-->
    <img class="model" src="img/cake01.png">
    <!--details-->
    <div class="details">
      <p>price</p>
    </div>
    
    </div>
    </li>
    <!--4------------------------------>
  <li class="item-a">
    <!--slider-box-->
    <div class="box">
    <p class="marvel">Black Forest Cake</p>
    <!--model-->
    <img class="model" src="img/cake01.png">
    <!--details-->
    <div class="details">
      <p>price</p>
    </div>
    
    </div>
    </li>
    <!--5------------------------------>
  <li class="item-a">
    <!--slider-box-->
    <div class="box">
    <p class="marvel">Black Forest Cake</p>
    <!--model-->
    <img class="model" src="img/cake01.png">
    <!--details-->
    <div class="details">
      <p>price</p>
    </div>
    
    </div>
    </li>
    <!--6------------------------------>
 <li class="item-a">
    <!--slider-box-->
    <div class="box">
    <p class="marvel">Black Forest Cake</p>
    <!--model-->
    <img class="model" src="img/cake01.png">
    <!--details-->
    <div class="details">
      <p>price</p>
    </div>
    
    </div>
    </li>
    </ul>
      
      
  
  
  </div>
  </section>
         
<footer class="footer" style="background-color: crimson">
    <center>
    <div class="footer-container">
        <div class="left-col">
          <img src="img/logo.png" alt="" class="logo">
        </div>
        <div class="copy">
            <p class="rights-text">© 2020 Created By DarkCode All Rights Reserved.</p>
        </div>
        <div class="center-info">
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
        </div>
        

        
      </div>
      </center>
</footer>


<!---------------------------------------
----background animation effect starts----
--------------------------------------->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
<script type="text/javascript">
  const mainNav = document.querySelector('.main-nav');

const hamburgerMenu = document.querySelector('.hamburger-menu');

hamburgerMenu.addEventListener('click', function () {
  mainNav.classList.toggle('open');
});
gsap.fromTo('.hero-clipped',{scaleX:0}, {duration: 1, scaleX:1});
gsap.fromTo('.logo',{X:-200, opacity:0}, {duration: 1, delay:.5, x:0, opacity: 1});
gsap.fromTo('.hamburger-menu',{X:200, opacity:0}, {duration: 1, delay:.8, x:0, opacity: 1});
gsap.fromTo('.hero-textbox',{yPercent:40, opacity:0}, {duration: 1, delay:1.3, yPercent:-50, opacity: 1});
</script>


<script src="js/script.js"></script>

   
   
    
    
   



<!---------------------------------------
----background animation effect ends----
---------------------------------------> 

</body>
</html>
