
<!DOCTYPE html>
<html class="no-js">
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


    </head>
    <body>
    <!-- NAVBAR
    ================================================== -->

    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                          <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#" target="_blank"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>
                       </ul> <!-- /.header-social  -->
                      
                    </div>


                  </div>
              </div>

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
                  
                  <a class="navbar-brand" href="index.php"><img src="assets/images/sadaka.png" width = "45" height = "45" align="left"></a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a href="index.php">HOME</a></li>
                    <li><a class="is-active"  href="about.html">ABOUT</a></li>
                    <li class="has-child"><a href="#">Project</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="causes.html">Project list </a></li>
                            
                      </ul>

                    </li>
                    <li><a href="gallery.html">GALLERY</a></li>
                    <li><a href="track.html">TRACK</a></li>

                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">DONATE NOW <span class="title-under"></span></h1>
			<p class="page-description">
				Every Coin Count...!!
			</p>
			
		</div>

	</div>

	<div class="main-container">

		<div class="container"
             >
            
            <!---- Call Databse-->
            
            <h3> List of charities </h3>
            
           
           <!-- <img src="https://chart.googleapis.com/chart?chs=225x225&chld=L|2&cht=qr&chl=bitcoin:bc1qjl8uwezzlech723lpnyuza0h2cdkvxvh54v3dn?amount=20" alt=""> -->
            
          
<div class="container">    
  <div class="row">
    <table style = "border-spacing:5em ;"width="100%" border="0" cellspacing="10" cellpadding="10">
           
        
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
            
            $sql = "SELECT NAME , Description  FROM `CHARITY` WHERE Description is not null order by NAME asc;";
            $result = mysqli_query($conn,$sql);
            
                                    
            if($result-> num_rows>0)
	{
                   
		while($row = $result-> fetch_assoc())
		{
           $link = "index.php";
			echo "<tr><td>".$row["NAME"]."</td><td>".$row["Description"]."</td><td>
                   <a href = '$link'><button type='button' class='btn btn-info'>Donate Now</button></td></a></tr>
                    <tr><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><tr>";
            
		}
         echo "<br>" ;      
		
	}
	else{
		echo "0 result";
	}
	$conn -> close();
            
            
        ?>
        
        
            </table>
      
    </div>
  </div>
</div><br>

<div class="container">    
 
            </div>
            
         
        <!-- End ------------------------------------------------------------------------------------------------------>
            

			<div class="section-home about-us">


			            <div class="row">

			                <div class="col-md-3 col-sm-6">
			                
			                  <div class="about-us-col">

			                        <div class="col-icon-wrapper">
			                          <img src="assets/images/icons/our-mission-icon.png" alt="">
			                        </div>
			                        <h3 class="col-title">our mission</h3>
			                        <div class="col-details">

                          <p>Leverage the power of Bitcoin and Blockchain technology to improve public health and the environment worldwide</p>
			                          
			                        </div>
			                        <a href="#" class="btn btn-primary"> Read more </a>
			                    
			                  </div>
			                  
			                </div>


			                <div class="col-md-3 col-sm-6">
			                
			                  <div class="about-us-col">

			                        <div class="col-icon-wrapper">
			                          <img src="assets/images/icons/make-donation-icon.png" alt="">
			                        </div>
			                        <h3 class="col-title">Make donations</h3>
			                        <div class="col-details">

                          <p>BitPay ares currently the only bitcoin payment processors that we know of who are accepting new nonprofit customers. </p>
			                          
			                        </div>
			                        <a href="#" class="btn btn-primary"> Read more </a>
			                    
			                  </div>
			                  
			                </div>


			                <div class="col-md-3 col-sm-6">
			                
			                  <div class="about-us-col">

			                        <div class="col-icon-wrapper">
			                          <img src="assets/images/icons/help-icon.png" alt="">
			                        </div>
			                        <h3 class="col-title">Help & support</h3>
			                        <div class="col-details">

                          <p>We appreciate our Partners who provide expertise, services and pro bono professional services to support Coingive on an on-going basis:</p>
			                          
			                        </div>
			                        <a href="#" class="btn btn-primary"> Read more </a>
			                    
			                  </div>
			                  
			                </div>


			                <div class="col-md-3 col-sm-6">
			                
			                  <div class="about-us-col">

			                        <div class="col-icon-wrapper">
			                          <img src="assets/images/icons/programs-icon.png" alt="">
			                        </div>
			                        <h3 class="col-title">our programs</h3>
			                        <div class="col-details">

                          <p>Since our founding in 2018, we have partnered with international relief efforts, local charities seeking to create better communities,</p>
			                          
			                        </div>
			                        <a href="#" class="btn btn-primary"> Read more </a>
			                    
			                  </div>
			                  
			                </div>
			                

			                
			            </div> <!-- /.row -->

			      
			    </div> 

		</div> <!-- /.about-us -->


	    <div class="our-team animate-onscroll fadeIn">

	        <div class="container">

	            <h2 class="title-style-1">Our Team <span class="title-under"></span></h2>

	            <div class="row">

	                <div class="col-md-3 col-sm-6">

	                    <div class="team-member">

	                        <div class="thumnail">

	                            <img src="assets/images/team/member-1.jpg" alt="" class="cause-img">
	                            
	                        </div>



	                        <h4 class="member-name"><a href="#">KAMALPREET SINGH</a></h4>

	                        <div class="member-position">
	                            CO-FOUNDER
	                        </div>

	                        <div class="btn-holder">

	                          <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
	                          
	                        </div>

	                        

	                    </div> <!-- /.team-member -->
	                    
	                </div>
					<div class="col-md-3 col-sm-6">

	                    <div class="team-member">

	                        <div class="thumnail">

	                            <img src="assets/images/team/member-3.jpg" alt="" class="cause-img">
	                            
	                        </div>



	                        <h4 class="member-name"><a href="#">HARDIK PATEL</a></h4>

	                        <div class="member-position">
	                            CO-FOUNDER
	                        </div>

	                        <div class="btn-holder">

	                          <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
	                          
	                        </div>

	                        

	                    </div> <!-- /.team-member -->
	                    
	                </div>
	                <div class="col-md-3 col-sm-6">

	                    <div class="team-member">

	                        <div class="thumnail">

	                            <img src="assets/images/team/member-3.jpg" alt="" class="cause-img">
	                            
	                        </div>



	                        <h4 class="member-name"><a href="#">AJEETHA KRISHNAN</a></h4>

	                        <div class="member-position">
	                            CO-FOUNDER
	                        </div>

	                        <div class="btn-holder">

	                          <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
	                          
	                        </div>

	                        

	                    </div> <!-- /.team-member -->
	                    
	                </div>


	                <div class="col-md-3 col-sm-6">

	                    <div class="team-member">

	                        <div class="thumnail">

	                            <img src="assets/images/team/member-4.jpg" alt="" class="cause-img">
	                            
	                        </div>



	                        <h4 class="member-name"><a href="#">SAMEERA</a></h4>

	                        <div class="member-position">
	                            CO-FOUNDER
	                        </div>

	                        <div class="btn-holder">

	                          <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
	                          
	                        </div>

	                        

	                    </div> <!-- /.team-member -->
	                    
	                </div>


	                <div class="col-md-3 col-sm-6">

	                    <div class="team-member">

	                        <div class="thumnail">

	                            <img src="assets/images/team/member-2.jpg" alt="" class="cause-img">
	                            
	                        </div>



	                        <h4 class="member-name"><a href="#">KUNWAR BIJJAN</a></h4>

	                        <div class="member-position">
	                            CO-FOUNDER
	                        </div>

	                        <div class="btn-holder">

	                          <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
	                          
	                        </div>

	                        

	                    </div> <!-- /.team-member -->
	                    
	                </div>

	            </div> <!-- /.row -->

	        </div>

	    </div>
		


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

                            <h4 class="footer-title">LAST TWEETS <span class="title-under"></span></h4>

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
                                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                                        </div>

                                         <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Message" required></textarea>
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
 <!-- Donate Modal -->
    <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="donateModalLabel">DONATE NOW</h4>
          </div>
          <div class="modal-body">

                <form action = "donate.php" method="post" class="form-donation">

                        <h3 class="title-style-1 text-center">Thank you for your donation <span class="title-under"></span>  </h3>

                        <div class="row">

                            <div class="form-group col-md-12 ">
                                <input type="text" class="form-control" id="amount" placeholder="AMOUNT(in Bitcoin)">
                            </div>

                        </div>


                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="firstName" placeholder="First name*">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="lastName" placeholder="Last name*">
                            </div>
                        </div>


                        <div class="row">

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="email" placeholder="Email*">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="phone" placeholder="Phone">
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="address" placeholder="Address">
                            </div>

                        </div>


                        <div class="row">

                            <div class="form-group col-md-12">
                                <textarea cols="30" rows="4" class="form-control" name="note" placeholder="Additional note"></textarea>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                              
								<a button type="submit" class="btn btn-primary pull-right"  HREF="php\donate.php" name="donateNow" >DONATE NOW!</button>
                           </a> 
							</div>

                        </div>



                       
                    
                </form>
            
          </div>
        </div>
      </div>

    </div> <!-- /.modal -->




       
        
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
