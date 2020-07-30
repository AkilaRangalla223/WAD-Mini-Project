<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cakes by Roo - Your favourite taste </title>
    <link rel="stylesheet" href="css/account.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

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
----------- login/register section starts ---------
---------------------------------------->
<div class="hero">
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Login</button>
            <button type="button" class="toggle-btn" onclick="register()">Register</button>
        </div>
        <div class="social-icons">
        <img src="img/fb.png">
        <img src="img/tw.png">
        <img src="img/gp.png">
        
    </div>
    <form id="login" class="input-group" action="account.php" method="POST">
        <input type="text" name="username" class="input-field" placeholder="User Name" required> 
        <input type="password" name="password" class="input-field" placeholder="Enter Password" required> 
        <input type="checkbox" class="chech-box"><span>Remember password</span>
        <button type="submit" class="submit-btn"  name="login_user">Login</button>
    </form>
    <form id="register" action="account.php" method="POST" class="input-group">
        <?php include('errors.php'); ?>
        <input type="text" name="username" class="input-field" placeholder="User Name" value="<?php echo $username; ?>"> 
       <input type="email" name="email" class="input-field" placeholder="Email" value="<?php echo $email; ?>"> 
        <input type="password" name="password_1" class="input-field" placeholder="Enter Password" required> 
        <input type="password" name="password_2" class="input-field" placeholder="Confirm Password" required> 
        
        <button type="submit" class="submit-btn" name="reg_user">Register</button>
    </form>
    </div>
    
    
</div>

    
<!---------------------------------------
----------- login/register section ends -----------
---------------------------------------->
   

<!---------------------------------------
----------- footer section starts -------
---------------------------------------->

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

<!---------------------------------------
----------- footer section ends ---------
---------------------------------------->




<!---------------------------------------
----background animation effect starts----
--------------------------------------->

    <diV class="animation-area">
        <ul class="box-area">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </diV>

<!---------------------------------------
----background animation effect ends----
--------------------------------------->    

<script src="js/account.js"></script>
</body>
</html>



