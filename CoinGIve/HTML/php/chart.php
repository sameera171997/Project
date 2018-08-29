<?php
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
              <meta charset="utf-8">
        <title>About | Charity / Non-profit responsive Bootstrap HTML5 template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>



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
      <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">


            </div>

            <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                  
                  
                </div>

                
              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->




	<div class="main-container">

		<div class="container">

		<!-- Start coding from<h2> HI Sameera</h2>------------------------------------------------>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

            

<link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet" media="screen">

    <nav class="navbar navbar-default navbar-fixed-top topbar">
		<div class="container-fluid">

			<div class="navbar-header">

				<a href="#" class="navbar-brand">
				
					<span class="hidden-xs">COIN GIVE</span>
                   
				</a>
                

				

			</div>

			<div class="navbar-collapse collapse" id="navbar-collapse-main">

				<ul class="nav navbar-nav navbar-right">
                    
                  <li><a href="logout.html">Logout</a></li>
                    
					
				</ul>

			</div>
		</div>
	</nav>
	
	<article class="wrapper">
	    
        <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                 
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-left">

                  <ul class="nav navbar-nav">

                    <li><a href="charityDashBoard.html">DASHBOARD</a></li>
                    <li><a href="charityConfiguration.html">REPORT</a></li>
                    
                    <li><a href="charityMail.html">MAIL</a></li>
                    
                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->

	   


   
 
        <!-- End ------------------------------------------------------------------------------------------------------>
            

    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
			


	    
	</div>


    <footer class="main-footer">

        <div class="footer-top">
            
        </div>


        <div class="footer-main">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">About us <span class="title-under"></span></h4>

                            <div class="footer-content">
                                <p>
                                    <strong>COINGIVE</strong> founded in 2018, BitGive is the first Bitcoin 501(c)(3) nonprofit, giving it tax exemption status at the federal level in the United States. BitGive has built a 
                                </p> 

                                <p>
									positive philanthropic representative organization for the Bitcoin and Blockchain industry, bridging the gap between an innovative technology and its practical applications for nonprofits and humanitarian work in the developing world. BitGive has established strong partnerships and raised funds with well-known nonprofits including Save the Children, The Water Project, TECHO, Medic Mobile, and more..
                                </p>

                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">LAST SHARES <span class="title-under"></span></h4>

                            <div class="footer-content">
                                <ul class="tweets list-unstyled">
                                    <li class="tweet"> 

                                        20 ,flinders street,Melbourne,VIC 

                                    </li>

                                    <li class="tweet"> 

                                        20 Collins Street,Melbourne,VIC 

                                    </li>

                                    <li class="tweet"> 

                                        2/130 singh street,albion,Victoria 

                                    </li>

                                </ul>
                            </div>
                            
                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">Contact us <span class="title-under"></span></h4>

                            <div class="footer-content">

                                <div class="footer-form" >
                                    
                                    <form action="php/mail.php" class="ajax-form">

                                    

                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="QUEIRES" required></textarea>
                                        </div>

                                        <div class="form-group alerts">
                        
                                            <div class="alert alert-success" role="alert">
                                              
                                            </div>

                                            <div class="alert alert-danger" role="alert">
                                              
                                            </div>
                                            
                                        </div>

                                         <div class="form-group">
                                            <button type="submit" class="btn btn-submit pull-right">Send message</button>
                                        </div>
                                        
                                    </form>

                                </div>
                            </div>
                            
                        </div>

                    </div>
                    <div class="clearfix"></div>



                </div>
                
                
            </div>

            
        </div>

        
        
    </footer>




       
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>


        <!-- Template main javascript -->
        <script src="assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
      
  </body>
</html>