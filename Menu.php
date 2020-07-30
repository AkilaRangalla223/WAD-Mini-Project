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
<link rel="stylesheet"  href="css/Home.css" />
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
	<center>
   <div  class="body" >
    
    <div class="container">
        <h1 >MENU</h1>
    </div>

    <!--<Swiper slider 1-->
    
       <!--Slide 1--------------------------------------------------> 
       		  
              
              <?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="container" style="margin-top: 100px;">
<div class="cart_div" style="margin-top: 0; float: center; ">
<button class="submit" type="submit" style="border:none; background:#ffb3b3 ; padding: 15px 32px; display: inline-block; font-size: 24px; margin-right: 50px; margin-left: 50px; border-radius: 20px;"><a href="cart.php"><img src="cart-icon.png" /> Cart<span style="color: black; font-size: 35px;"><?php echo $cart_count; ?></span></a></button>
</div>
</div>

<?php
}

$result = mysqli_query($con,"SELECT * FROM `menu`");
while($row = mysqli_fetch_assoc($result)){
		echo "
           
            
            <div class='col-lg-4 col-md-6' style='float:left;' >
			  <div class='product_wrapper ' style=' padding: 10px;
                text-align: center; width: 100%;height: 100%; margin-right: 10px;'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='image' ><img class='img' style='width: 150px; height:150px; object-fit:cover;'  src='".$row['productimage']."' /></div>
			  <div class='name'>".$row['productname']."</div>
		   	  <div class='price'>$".$row['productprice']."</div>
			  <button type='submit' class='buy' style='background: #ff3333;'>ORDER Now</button>
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