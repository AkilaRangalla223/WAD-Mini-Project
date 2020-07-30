<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
        if($_POST["code"] == $key){
        unset($_SESSION["shopping_cart"][$key]);
        $status = "<div class='box' style='color:red;'>
        Product is removed from your cart!</div>";
        }
        if(empty($_SESSION["shopping_cart"]))
        unset($_SESSION["shopping_cart"]);
            }       
        }
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cakes by Roo - Your favourite taste </title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/cart.css" type="text/css">
    <link rel="stylesheet" href="css/Home.css" type="text/css">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    
</head>
<body>

 
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
----------- cart section starts ---------
---------------------------------------->
<div class="center">
<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
<h2> Order Cart </h2>  
</div>
    <?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<button class="submit" type="submit" style="border:none; background:#ffb3b3 ; padding: 15px 32px; display: inline-block; font-size: 24px; margin-left: 50px; border-radius: 20px;" >
<a href="cart.php">
<img src="cart-icon.png" /> Cart
<span style="color: black; font-size: 35px; "><?php echo $cart_count; ?></span></a></button>
</div>
<?php
}
?>
<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?> 

<table class="container table" style="">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>   
<?php       
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["productimage"]; ?>' width="60" height="50" /></td>
<td><?php echo $product["productname"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove' style="border:none; background:#ffb3b3 ;  display: inline-block;  border-radius: 15px;">Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "$".$product["productprice"]; ?></td>
<td><?php echo "$".$product["productprice"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["productprice"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "$".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>

</div>

      
  <?php
}else{
    echo "<h3 style='float:center; margin-left: 650px;'>Your cart is empty!</h3>";
    }
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
<div class="container">
<button onclick="proceed()" style="float: right; background:#ff80aa; border-radius: 20px;">Proceed the order</button>
<p id="demo"></p>


</div>



<!---------------------------------------
----------- cart section ends -----------
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

<script src="js/main.js"></script>
<script >
    function proceed(){
    document.getElementById("demo").innerHTML = "Successfully order";
}
</script>
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