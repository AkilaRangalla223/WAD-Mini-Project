<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cakes by Roo - Your favourite taste </title>
    <link rel="stylesheet" href="css/About.css" type="text/css">
    <link rel="stylesheet" href="css/contact.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />

</head>
<body >

<!---------------------------------------
------------nav-bar starts---------------
---------------------------------------->
    <div id="menu-bar">
        <div id="menu" onclick="onClickMenu()">
            <div id="bar1" class="bar"></div>
            <div id="bar2" class="bar"></div>
            <div id="bar3" class="bar"></div>
        </div>
        <ul class="nav" id="nav">
            <li><a href="Home.php">Home</a></li>
            <li><a href="Menu.php">Menu</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="account.php">Account</a></li>
            <li><a href="cart.php"> Cart</a></li>
        </ul>
    </div>
    <div class="menu-bg" id="menu-bg"></div>
   

<!---------------------------------------
----------- nav-bar ends ----------------
---------------------------------------->

<!---------------------------------------
----------- About start ----------------
-
------
--------------------------------->

<div id="container">
    <div id="main">
<section>
<div class="container">

<div class="team-section">
	<h1>About</h1>

<div class="ps">
	 <a href="#"><img src="img/2.jpg" alt=""></a>
	 <a href="#"><img src="img/4.jpg" alt=""></a>	
</div>

<div class="section" id="p1">
	<p>
		write the about....
	</p>
</div>
</div>
</div>

</section>
<section>
<div class="container" >

	<h2>Contact Us</h2>
  
  <form class="form" action="component.php" method="POST">
    
    <div class="username">
      <label for="name">Name</label>

      <input type="text" name="name" id="name" placeholder="Enter your name" >
      
    </div>
    
    <div class="useremail">
      <label for="email">Email</label>  
      
      <input type="text" name="email" id="email" placeholder="mail@example.com" >
      
    </div>
    
    <div class="usercontact">
      <label for="contact">Phone number</label>
      
      <input type="text" name="contact" id="contact" placeholder="contact no." >
      
    </div>    
  
    <div class="usertext">
      <label for="text">Comments</label>
      
      <textarea name="text" placeholder="Write something to us" ></textarea>
                        
    </div>
    
    <div class="usersubmit">
      <input type="submit" name="submit" value="Send" >
    </div>
  </form>

</div>

</section>

</div>
</div>






<!---------------------------------------
----------- About ends ----------------
---------------------------------------->


<!---------------------------------------
----------- footer section starts -------
---------------------------------------->

<div class="footer">
<footer class="footer">
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
</div>

<!---------------------------------------
----------- footer section ends ---------
---------------------------------------->




<!---------------------------------------
----background animation effect starts----
--------------------------------------->

   <!-- <diV class="animation-area">
        <ul class="box-area">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </diV>-->

<!---------------------------------------
----background animation effect ends----
--------------------------------------->    

<script src="js/account.js"></script>
</body>
</html>
