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
    <title>Cakes by Roo-Your favourite taste </title>
    <link rel="stylesheet" href="css/Home.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Monoton' rel='stylesheet'>
    <link rel="stylesheet" href="css/account.css" type="text/css">
</head>

<body>
  <!---------------------------------------
------------insert a background image---------------
---------------------------------------->  
  
  <div style="background-image: url('img/HOME – 1.png');">

   
    
 <!---------------------------------------
------------insert a logo---------------
---------------------------------------->       
  
  <img  src="img/logo.png"> 

<!---------------------------------------
------------nav-bar starts---------------
---------------------------------------->
    
  <div class="topnav">
 

  <a class="active" href="#home">HOME</a>
  <a href="Menu.php">MENU</a>
  <a href="About.php">ABOUT</a>
  <a href="account.php">ACCOUNT</a>
  <a href="cart.php">CART</a>
  <a href="account.php">LOGIN</a>
  <a href="account.php">SIGNUP</a>

     </div>

<!---------------------------------------
----------- nav-bar ends ----------------
---------------------------------------->
<center>
<div class="content">
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
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p> <button ><a href="Home.php?logout='1'" style="color: red;">logout</a></button> </p>
    <?php endif ?>
</div>
</center>
 
<!---------------------------------------
----------- insert a heading ----------------
---------------------------------------->
 
     <p class="heading1">CUPCAKES | </p>
     <p class="heading2">DOUGHNUTS </p>



<!---------------------------------------
----background animation effect starts----
--------------------------------------->
 <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-124048250-1');
    </script>
    

  </head>
  <body>

   
    <section class="page-wrapper" >

      <div class="slider">
        
        <ul class="slider-list">
          
          <li class="slider-list__item  ">
            <span class="back__element">
              <img src="img/back_apple_002.png" />
            </span>
            <span class="main__element">
              <img src="img/Mask Group 8.png" />
            </span>
            <span class="front__element">
              <img src="img/front_apple_002.png" />
            </span>
            
            </span>
            </span>
            </span>
           </li>

          <li class="slider-list__item">
            <span class="back__element">
              <img src="img/back_grapes_001.png" />
            </span>
            <span class="main__element">
              <img src="img/Mask Group 15.png" />
            </span>
            <span class="front__element">
              <img src="img/front_grapes_001.png" />
            </span>
            
            </span>
            </span>
            </span>
           </li>

           <li class="slider-list__item">
            <span class="back__element">
              <img src="img/back_strawberry_003.png" />
            </span>
            <span class="main__element">
              <img src="img/Mask Group 16.png" />
            </span>
            <span class="front__element">
              <img src="img/front_strawberry_003.png" />
            </span>
            
          </span>
            </span>
           </li>
           
        </ul>
        
        <div class="slider__nav-bar">
          <a class="nav-control"></a>
          <a class="nav-control"></a>
          <a class="nav-control"></a>
        </div>
        
        <div class="slider__controls">
          <a class="slider__arrow slider__arrow_prev"></a>
          <a class="slider__arrow slider__arrow_next"></a>
        </div>

      </div>      

    </section>
  
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
    
    <script src="js/Home.js"></script>


<!---------------------------------------
----background animation effect ends----
---------------------------------------> 

</body>
</html>