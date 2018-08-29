<!DOCTYPE html>
<html>
<head>
	<title> Report for Charity dashboard</title>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>

<body>
<table>
 <tr>
    <th>Donor_Name</th>
	
	<th>Donation_Made</th>
 </tr>
	
<?php
$servername = "localhost";
$username = "sameera";
$password = "fOS4X2vkXpWWcmp8";
$db = "coingive";
$dbhandle = new mysqli($servername, $username, $password, $db);
 
if($conn->connection_error){
	die("Connection failed:". $conn-> connect_error);
}else{

$sql = "select DONOR.name as Name  , PAYMENT.TOTAL_COIN as Coin  from DONOR,PAYMENT where DONOR.D_ID = PAYMENT.D_ID GROUP BY DONOR.D_ID";
$result = $conn-> query($sql);

 if($result-> num_rows > 0)
 {
     
	 while ($row = $result-> fetch_assoc()){
			echo "<tr><td>".$row["Name"]."</td><td>".$row["Coin"]."</td></tr>";
	 }
	 	 
}
 else
     {
		 echo "0 result";
	 }
	 
	 $conn-> close();
}
?>
</table>
</body>
</html>