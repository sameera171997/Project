-<?php
$servername = "localhost";
$username = "sameera";
$password = "fOS4X2vkXpWWcmp8";
$db = "coingive";


// Create connection
$dbhandle = new mysqli($servername, $username, $password, $db);
 
 echo $dbhandle->connect_error;
 
 $query =  "select charity.name as Name  , sum(PAYMENT.TOTAL_COIN) as total from charity , PAYMENT where CHARITY.C_ID = PAYMENT.C_ID GROUP BY CHARITY.C_ID";
$res = mysqli_query($dbhandle,$query);
$row = mysqli_fetch_array($res,MYSQLI_ASSOC);

/* $res=dbhandle->query($query);*/
 ?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Charity', 'Donation Recieved'],
          <?php
            
		      
			  echo "['".$row['Name']."',".$row['total']."],";

		  ?>
        
        ]);

        var options = {
          title: 'Donation Reports',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
      
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>