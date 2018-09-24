<?php
session_start();
$servername = "localhost";
$username = "sameera";
$passwords = "fOS4X2vkXpWWcmp8";
$db = "coingive";


// Create connection
$conn = new mysqli($servername, $username, $passwords, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {echo "sucess             ";}



$db_select = mysqli_select_db($conn,'CHARITY');
$NAME = $_REQUEST['username'];
$pass = $_REQUEST['gol'];


if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $donorusername = mysqli_real_escape_string($conn,$_POST['username']);
      $donorpassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM `CHARITY` WHERE EMAIL = '$NAME' and PASSWORD = '$pass'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      
      $count = mysqli_num_rows($result);
      
     
      if($count == 1) {
          $sqlName = "SELECT NAME FROM `CHARITY` WHERE EMAIL = '$NAME' and PASSWORD = '$pass';";
          $results = mysqli_query($conn,$sqlName);
          $user = mysqli_fetch_assoc($results);
          
          $name =  implode ("" ,$user);
         $sqlTotal = "SELECT count (payment.TOTAL_COIN) as Amount FROM donor , payment , charity where donor.D_ID = payment.D_ID and charity.C_ID = payment.C_ID and charity.name ='$name;";
          $tot = mysqli_query($conn,$sqlTotal);
          $coin = mysqli_fetch_assoc($tot);
          $total = implode ("" ,$coin);
          
         header("location: ../charityDashBoard.php?id=$name");
          
      }else {
         $error = "Your Login Name or Password is invalid";
          
          echo $error ;
      }
   }


session_destroy();
$conn ->close();
?>
