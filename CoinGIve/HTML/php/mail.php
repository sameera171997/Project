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


$NAME = $_POST['name'];
$EMAIL = $_POST['email'];
$MESSEGE = $_POST['message'];

$sql = "INSERT INTO `CONTACT` (`NAME`, `EMAIL`, `MESSEGE`) VALUES ('$NAME', '$EMAIL', '$MESSEGE')";

if ($conn->query($sql) === TRUE) {
    echo "FORM SUBMITTED SUCESSFULLY";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("refresh:2; url=http://localhost/CoinGive/HTML/contact.html")


?>