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
} else {}


$id = "1" ;

$db_select = mysqli_select_db($conn,'PAYMENT');




if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      
   }



$conn ->close();
?>


