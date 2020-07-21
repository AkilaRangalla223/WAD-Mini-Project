<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/
session_start();
include('connect.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `menu` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['productname'];
$code = $row['code'];
$price = $row['productprice'];
$image = $row['productimage'];

$cartArray = array(
	$code=>array(
	'productname'=>$name,
	'code'=>$code,
	'productprice'=>$price,
	'quantity'=>1,
	'productimage'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cakes Menu</title>
<!--Adding links -->

<link rel="stylesheet"  href="css/style.css" />
<link rel="stylesheet" href="css/cart.css" media="all">
<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />





</head>
<body>

	<!---------------------------------------
------------cart container starts---------------
---------------------------------------->





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
	<center>
   <div  class="body" >
    
    <div class="men">
        <h1 >MENU</h1>
    </div>

    <!--<Swiper slider 1-->
    
       <!--Slide 1--------------------------------------------------> 
       		  
              
              <?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>

<div class="cart_div">
<button class="submit" type="submit"><a href="cart.php"><img src="cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a></button>
</div>
<?php
}

$result = mysqli_query($con,"SELECT * FROM `menu`");
while($row = mysqli_fetch_assoc($result)){
		echo "
           
            
            <div class='col-lg-4 col-md-6' >
			  <div class='product_wrapper '>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='image'><img class='img' src='".$row['productimage']."' /></div>
			  <div class='name'>".$row['productname']."</div>
		   	  <div class='price'>$".$row['productprice']."</div>
			  <button type='submit' class='buy'>ORDER Now</button>
			  </form>
		   	  </div>
              
              </div>";
        }
mysqli_close($con);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
</div>

          

      </center>
    
        <!--Slide 2-------------------------------------------------->       
              
        <!--Slide 3-------------------------------------------------->       
             

        <!--Slide 4-------------------------------------------------->       
              

        <!--Slide 5-------------------------------------------------->       
              

        <!--Slide 6-------------------------------------------------->       
             
         <!--Slide 7-------------------------------------------------->       
             
        <!--Slide 8-------------------------------------------------->       
              

        <!--Slide 9-------------------------------------------------->       
              
              
        <!--Slide 10-------------------------------------------------->       
                                                    
     
     
    <!--Swiper Slider 1 end-->    	  

                         
     
       
    <!--Swiper Slider 2 end--> 

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


<script src="js/script.js"></script>




</body>
</html>