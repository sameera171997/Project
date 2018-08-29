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
$PASSWORD = $_POST['password'];
$POSTCODE = $_POST['postCode'];
$WALLET = $_POST['walletID'];

$sql = "INSERT INTO `CHARITY` (`C_ID`, `NAME`, `EMAIL`, `PASSWORD`, `POSTCODE`, `C_WALLET`) VALUES ('5', '$NAME', '$EMAIL', '$PASSWORD', '$POSTCODE', '$WALLET')";
if ($conn->query($sql) === TRUE) {
    echo "SINGED UP";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("refresh:2; url=http://localhost/git/CoinGive/HTML/charityDashBoard.html")


?>