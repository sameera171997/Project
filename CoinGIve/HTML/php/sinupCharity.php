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
$PASSWORD = $_POST['pass'];
$POSTCODE = $_POST['postCode'];
$WALLET = $_POST['walletID'];

$sql = "INSERT INTO `CHARITY` (`C_ID`, `NAME`, `EMAIL`, `PASSWORD`, `POSTCODE`, `C_WALLET`) VALUES (NULL , '$NAME', '$EMAIL', '$PASSWORD', '$POSTCODE', '$WALLET');";
if ($conn->query($sql) === TRUE) {
    echo "SIGNED UP <br> <br>";
    echo "Redirecting.......";
    header("refresh:2; url=http://localhost/git/CoinGive/HTML/charityDashBoard.php?id=$NAME");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>