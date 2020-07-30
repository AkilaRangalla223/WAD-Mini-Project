<?php 
  //creating connection to database
$con=mysqli_connect("localhost","root","","register") or die(mysqli_error());
  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$total_price = $con->real_escape_string($_POST['total']);

  //query to insert the variable data into the database
$sql="INSERT INTO sales (total) VALUES ('".$total_price."')";
  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
   echo "Thank you! We will get in touch with you soon";
}
?>
