<?

$charityPassword = $_POST['charityPassword'];
$charityEmail = $_POST['email'];


$connect = mysql_connect("localhost", $charityEmail , $charityPassword);
 @mysql_select_db($pra) or ("Database not found");
 
 $query = "Select * from 'charity' where 'charityEmail' = '$charityEmail')";
 $queryPass = " Select * from 'uses' Where 'password' = '$charityPassword')";
 
 echo $query;
 echo $queryPass;
 
 $result = mysql_query($query);
 $resultPass = mysql_query($queryPass);
 
 $row = mysql_fetch_array($result);
 $rowpass = mysql_fetch_array($resultPass); 
 
 $serveruser = $row["charityEmail"];
 $serverpass = $row[""];
 mysql_close();
 >
 