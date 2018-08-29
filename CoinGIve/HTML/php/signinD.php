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
$WALLET = $_POST['walletID'];

$sql = "INSERT INTO `DONOR` (`D_ID`, `NAME`, `EMAIL`, `PASSWORD`, `D_WALLET`) VALUES ('3', '$NAME', '$EMAIL', '$PASSWORD', '$WALLET')";
if ($conn->query($sql) === TRUE) {
    echo "SINGED UP";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("refresh:2; url=http://localhost/git/CoinGive/HTML/DonorDashBoard.html")


?>