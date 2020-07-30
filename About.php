<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cakes by Roo - Your favourite taste </title>
    <link rel="stylesheet" href="css/About.css" type="text/css">
    <link rel="stylesheet" href="css/contact.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/Home.css" type="text/css">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />

</head>
<body >

<!---------------------------------------
------------nav-bar starts---------------
---------------------------------------->
   <header>
    <nav class="main-nav">
      
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
</body>
</html>
