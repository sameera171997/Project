<?php include('php/loginCharity.php'); 
session_start() ;
$servername = "localhost";
$username = "sameera";
$passwords = "fOS4X2vkXpWWcmp8";
$db = "coingive";


// Create connection
$conn = new mysqli($servername, $username, $passwords, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {echo "sucess             ";}

?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <style>
table {
    border :1px solid;
    border-collapse: collapse;
    width: 100%;
}

th, td {
    border-style: groove;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #007acc;
    color: white;
}
</style>
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


    </head>
    <body>
    <!-- NAVBAR
    ================================================== -->

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
                  <h1>Wecome <?php 
                       $name = $_GET['id'];
                      echo $name;
                         ?></h1>
                <div id="navbar" class="navbar-collapse collapse pull-left">

                  <ul class="nav navbar-nav">

                    <li><a href="charityDashBoard.html">DASHBOARD</a></li>
                    <li><a class="#configuration" href="php/chart.php?id=<?php echo $_GET['id']; ?>">REPORT</a></li>
                    <li><a href="charityMail.html">MAIL</a></li>
                    
                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->

	   
	    
	    <section class="main">
            
	        <section class="tab-content">
	            
	           <section class="tab-pane active fade in content" id="dashboard">
	               
	                <div class="row">
	                   
                        <div class="col-xs-6 col-sm-3">
	                        <div class="panel panel-primary">
	                            <div class="panel-body">
                                    
                                   Donations Received<br/>
                                    <?php
                                    $sqlTotal = "select sum(payment.TOTAL_COIN) from PAYMENT,CHARITY where PAYMENT.C_ID = CHARITY.C_ID and CHARITY.name = '$name';";
                                    $tot = mysqli_query($conn,$sqlTotal);
                                    $coin = mysqli_fetch_assoc($tot);
                                    $total = implode ("" ,$coin);
                                    
                                       echo $total ;
                                    ?>
	                                <br/><br/><br/>
	                            </div>
	                        </div>
	                    </div>
	                    
	                    <div class="col-xs-6 col-sm-3">
	                        <div class="panel panel-success">
	                            <div class="panel-body" >
                                    Current Value <br/>
                                    <script>
                                    var val = "<?php echo $total ?>";
                                        
                                    fetch('https://blockchain.info/ticker')
                                    .then(res => res.json())
                                    .then((out) => {
                                
                                    console.log('Output: ', out);
                                    var total = "<br><br> $ "    
                                    total += out.AUD.sell * val ;
                                    total += " (prices in AUD)"   
                                        $('#tot').html(total);
                                    
                                    } ).catch(err => console.error(err));
                                    
                                    </script>
                                    <div id="tot"> </div>
                                    
	                           
                                    
	                            </div>
	                        </div>
	                    </div>
	                    
	                    <div class="col-xs-6 col-sm-3">
	                        <div class="panel panel-danger">
	                            <div class="panel-body">
                                    Uncleared Donations
                                    
	                                <br/> <br/><br/><br/>
	                            </div>
	                        </div>
	                    </div>
	                    
	                    <div class="col-xs-6 col-sm-3">
	                        <div class="panel panel-warning">
	                            <div class="panel-body">
                                    Total Voulunteers
	                                <br/> <br/><br/><br/>
	                            </div>
	                        </div>
	                    </div>
	                   
	                   <div class="col-xs-12 col-sm-9">
	                       <div class="panel panel-default">
	                           <div class="panel-heading">
	                            Individual Donations
	                           </div>
	                           <div class="panel-body">
	                               <table>
	<tr>
	  <th>Donor</th>
	  <th>Amount</th>
	  
	</tr>
	<?php
	
	$name = $_GET['id'];
	$sql = "SELECT donor.Name as Name , payment.TOTAL_COIN as Amount FROM donor , payment , charity where donor.D_ID = payment.D_ID and charity.C_ID = payment.C_ID and charity.Name = '$name';"; 
	$result = mysqli_query($conn,$sql);
	
	if($result-> num_rows>0)
	{
		while($row = $result-> fetch_assoc())
		{
			echo "<tr><td>".$row["Name"]."</td><td>".$row["Amount"]."</td></tr>";
		}
		
	}
	else{
		echo "0 result";
	}
	$conn -> close();
	
	?>
	</table>
	                               <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	                           </div>
	                       </div>
	                   </div>
	                   
	                   <div class="col-xs-12 col-sm-3">
	                       <div class="panel panel-default">
	                           <div class="panel-heading">
	                               Please send  description to receive donation(Can alter later)
	                           </div>
	                           <div class="panel-body">
	                               <form action = "php/description.php?id=<?php $name = $_GET['id']; echo $name; ?>" method="post" id="descriptionForm">
                                       
                                   <textarea rows="4" cols="30" id="description" name="comment"></textarea>
                                       <br><br>
                                       <button name = "send">Update</button>
                
                                   </form>
	                           </div>
	                       </div>
	                       
	                       <div class="panel panel-default">
	                           <div class="panel-heading">
	                               COIN GIVE
	                           </div>
	                           <div class="panel-body">
                                   Start a <a target="_blank">campain</a><br>
	                               Designed by Coin Give
	                           </div>
	                       </div>
	                   </div>
	                   
	               </div>
	               
	           </section>
	           
	           <section class="tab-pane fade" id="configuration">
	               <nav class="subbar">
			            <ul class="nav nav-tabs">
				            <li class="active"><a href="#access" data-toggle="tab"><i class="fa fa-code"></i> <span>System</span></a></li>
				            <li><a href="#roles" data-toggle="tab"><i class="fa fa-user"></i> <span>Roles</span></a></li>
			            </ul>
		            </nav>
		            
		            <section class="tab-content content">
		                
		                <section class="tab-pane active fade in" id="access">
		                    
                            <div class="row">
                                <div class="col-xs-12">
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        Something
	                                    </div>
	                                    <div class="panel-body">
	                                        <br/><br/><br/><br/>
	                                    </div>
	                                </div>
	                            </div>
	                            
	                            <div class="col-xs-12 col-sm-4">
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        Something
	                                    </div>
	                                    <div class="panel-body">
	                                        <br/><br/><br/><br/>
	                                    </div>
	                                </div>
	                            </div>
	                            
	                            <div class="col-xs-12 col-sm-4">
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        Something
	                                    </div>
	                                    <div class="panel-body">
	                                        <br/><br/><br/><br/>
	                                    </div>
	                                </div>
	                            </div>
	                            
	                            <div class="col-xs-12 col-sm-4">
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        Something
	                                    </div>
	                                    <div class="panel-body">
	                                        <br/><br/><br/><br/>
	                                    </div>
	                                </div>
	                            </div>
                            </div>
		                    
		                </section>
		                
		                <section class="tab-pane fade" id="roles">
		                    
		                    <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-9">
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        Something
	                                    </div>
	                                    <div class="panel-body">
	                                        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	                                    </div>
	                                </div>
	                            </div>
	                            
	                            <div class="hidden-xs col-sm-4 col-md-3">
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        Something
	                                    </div>
	                                    <div class="panel-body">
	                                        <br/><br/><br/>
	                                    </div>
	                                </div>
	                                
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        Something
	                                    </div>
	                                    <div class="panel-body">
	                                        <br/><br/><br/>
	                                    </div>
	                                </div>
	                            </div>
	                       </div>
		                </section>
		                
		            </section>
		            
	           </section>
	           
	           <section class="tab-pane fade" id="users">
	               <p> HI </p>
	           </section>
	           
	           <section class="tab-pane fade" id="mail">
	               
	           </section>
	           
	        </section>
	        
	        
	                
	        
	    </section>
	    
	</article>

   
 
        <!-- End ------------------------------------------------------------------------------------------------------>
            

			


	    
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
