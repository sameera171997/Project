<?php
$servername = "localhost";
$username = "sameera";
$password = "fOS4X2vkXpWWcmp8";
$db = "coingive";


// Create connection
$dbhandle = new mysqli($servername, $username, $password, $db);
 
if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}

if (!mysql_select_db("mydbname")) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
}

$sql = "select currencyName, address FROM Currency";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Currency</th><th>Address</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["currencyName"]. "</td><td>" . $row["address"]. "  "</td></tr>"";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}

if (!mysql_select_db("mydbname")) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
}

$sql = "select currencyName, address FROM Currency";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Currency</th><th>Address</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["currencyName"]. "</td><td>" . $row["address"]. "  "</td></tr>"";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>