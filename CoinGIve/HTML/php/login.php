<?php

$servername = "localhost";
$username = "sameera";
$password = "fOS4X2vkXpWWcmp8";
$db = "coingive";


// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {echo "sucess ";}


$db_select = mysqli_select_db($conn,'coingive');
$NAME = $_POST['username'];
//$PASSWORD = $_POST['password'];

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $donorusername = mysqli_real_escape_string($conn,$_POST['username']);
      $donorpassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM `DONOR` WHERE EMAIL = '$donorusername' and PASSWORD = '$donorpassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  $yes1 = mysqli_query($conn,"SELECT NAME FROM `DONOR` WHERE EMAIL = '$donorusername' and PASSWORD = '$donorpassword'");
	  $name=mysqli_fetch_assoc($yes1);
	  $yes2 = mysqli_query($conn,"SELECT D_ID FROM `DONOR` WHERE EMAIL = '$donorusername' and PASSWORD = '$donorpassword'");
	  $d_id=mysqli_fetch_assoc($yes2);
	  $yes3 = mysqli_query($conn,"SELECT EMAIL FROM `DONOR` WHERE EMAIL = '$donorusername' and PASSWORD = '$donorpassword'");
	  $email=mysqli_fetch_assoc($yes3);
	  $yes4 = mysqli_query($conn,"SELECT D_WALLET FROM `DONOR` WHERE EMAIL = '$donorusername' and PASSWORD = '$donorpassword'");
	  $d_wallet=mysqli_fetch_assoc($yes4);
      $_SESSION["NAME"] =$name;
	  $_SESSION["D_ID"] = $d_id;
      $_SESSION["EMAIL"] = $email;
	  $_SESSION["D_WALLET"] = $d_wallet;
      $count = mysqli_num_rows($result);
      
      // If result matched $donorusername and $donorpassword, table row must be 1 row
		
      if($count == 1) {
         
         header("location: ../donorWelcome.php");
          
      }else {
         $error = "Your Login Name or Password is invalid";
          
          echo $error ;
      }
   }



$conn ->close();
?>




