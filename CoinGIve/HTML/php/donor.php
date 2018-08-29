<!DOCTYPE html>
<html>
<head>
	<title> Report for Donor dashboard</title>
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
    <th>Charity_Name</th>
	<th>Date</th>
	<th>Donation_Amount</th>
 </tr>
	
<?php
$conn = mysqli_connect("localhost","root","<DATABASENAME>");
if($conn->connection_error){
	die("Connection failed:". $conn-> connect_error);
}

$sql = "SELECT <DONOR_ID>, <DATE> from Donation";
$result = $conn-> query($sql)

 if($result-> num_rows > 0){
	 while ($row = $result-> fetch_assoc()){
			echo "<tr><td>".$row["DONOR_ID"]."</td><td>".$row["DATE"]."</td></tr>";
			
	 }
	 echo "</table>";	 
	 }
	 else{
		 echo "0 result";
	 }
	 
	 $conn-> close();
?>
</table>
</body>
</html>