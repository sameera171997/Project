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
} else {echo "sucess             ";}



$db_select = mysqli_select_db($conn,'CHARITY');
$NAME = $_POST['username'];
$PASSWORD = $_POST['password'];


if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $donorusername = mysqli_real_escape_string($conn,$_POST['username']);
      $donorpassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM `DONOR` WHERE EMAIL = '$NAME' and PASSWORD = '$PASSWORD'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($result);
      
      // If result matched $donorusername and $donorpassword, table row must be 1 row
		
      if($count == 1) {
         
         header("location: ../donorWelcome.html");
          
      }else {
         $error = "Your Login Name or Password is invalid";
          
          echo $error ;
      }
   }



$conn ->close();
?>


