<?php

$servername = "localhost";
$username = "sameera";
$password = "fOS4X2vkXpWWcmp8";
$dbname = "coingive";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$text = $_REQUEST['comment'];
$NAME = $_GET['id'];

$sql = "UPDATE `CHARITY` SET `Description` = '$text' WHERE `CHARITY`.`name` = '$NAME';";
if ($conn->query($sql) === TRUE) {
    echo "Description updated. Returning to home page " ;
     header("refresh:1; url=http://localhost/git/CoinGive/HTML/charityDashBoard.php?id=$NAME");

}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>