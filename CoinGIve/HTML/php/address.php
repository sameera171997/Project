<?php
$servername = "localhost";
$username = "sameera";
$password = "fOS4X2vkXpWWcmp8";
$db = "coingive";

$conn = new mysqli($servername, $username, $password, $dbname);
echo "Sam1";
if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}
echo "Sam2";
if (!mysql_select_db("mydbname")) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
}
echo "Sam3";
$sql = "SELECT NAME , POSTCODE , C_WALLET FROM `CHARITY`;";
echo "Sam";
echo $sql;
$result = mysql_query($sql);
echo $result ;
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["NAME"]. " PostCode " . $row["POSTCODE"]. "C_WALLET "$row.["C_WALLET"];
    }
}

else{
    echo "No charity to show";
}



$conn->closea()
?> 