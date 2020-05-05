<?php require_once('Backend/dbconnection.php'); ?>
<?php
   
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Green View Holiday Resort</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- Bootstrap CSS -->
		<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        
        <!-- CSS here -->
            <link rel="stylesheet" href="assets/css/taxi.css">
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/gijgo.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/responsive.css">
	</head>
	<body>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <strong>Green View Holiday</b>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area header-sticky">
            <div class="main-header ">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                               <a href="index.php"><img src="assets/img/logo/logo-img.png" alt=""></a>
                            </div>
                        </div>
                    <div class="col-xl-8 col-lg-8">
                            <!-- main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                                                                                     
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="services.php">Service</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="rooms.php">Rooms</a></li>
                                                <li><a href="###">Halls</a></li>
                                                <li><a href="Promotion.php">Promotions</a></li>
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="taxi.php">Taxi Reservation</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="###">Login</a>
                                            <ul class="submenu">
                                            <li><a href="login.php">Login</a></li>
                                                <li><a href="register.php">SignUp</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <div class="col-xl-2 col-lg-2">
                            <!-- header-btn -->
                            <div class="header-btn">
                                <a href="#" class="btn btn1 d-none d-lg-block ">Book Online</a>
                            </div>
                        </div>
                        
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
<main>
    
    <div class="container">
		<h1><img src="assets/img/taxi/taxi6.jpg" alt=""></h1>
		<form action="" method="POST" role="form">
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label for="">Total Distance / KM</label>
					<input type="text" class="form-control" name="distance" placeholder="Input total Distance">
				</div>
			</div>

			<div class="col-lg-4">
				<div class="form-group">
                    <div>
					<label for="">Charge per 1KM</label>
                    </div>
					<select class="form-control" name="meter">
						<option value="50">LKR 50 for Car</option>
                        <option value="40">LKR 40 for Van</option>
                        <option value="30">LKR 30 Budget Car</option>
					</select>
				</div>
			</div>
			
			<div class="col-lg-6">
				<button type="submit" class="btn btn-primary">Calculate</button>
			</div>
		</div>
		</form>

		<hr>
		<?php
		if(isset($_POST['distance']))
		{
			$total = 0;
			$distance = (int) $_POST['distance'];

			function calculate($distance,$range,$tax)
			{
				$xdistance = $range[1]-$range[0]+1;
				if($distance>0)
				{
					$bill = $distance  * $tax;
					echo "
						<tr>
							<td><h6>".implode("-", $range)."</h6></td>
							<td><h6>$tax</h6></td>
							<td><h6>$distance</h6></td>
							<td><h6>LKR $bill</h6></td>
						</tr>
						";
					return array($distance-$xdistance, $bill);
				}
				elseif($distance>$xdistance)
				{
					$bill = $xdistance * $tax;
					$newdistance = $distance - $xdistance;
					echo "
						<tr>
							<td>".implode("-", $range)."</td>
							<td>$tax</td>
							<td>".$xdistance."</td>
							<td>LKR $bill</td>
						</tr>
						";
					return array($newdistance, $bill);
				}
			}

			echo "<h3>Bill for $distance KM(s)</h3>";

			echo "<table class=\"table table-hover\">
			<thead>
				<tr>
					<th><h4>Distance Range(KM)</h4></th>
					<th><h4>Tax per 1KM</h4></th>
					<th><h4>Distance</h4></th>
					<th><h4>Bill</h4></th>
				</tr>
			</thead>
			<tbody>
				
			";

			$newdistance = 0;
			if($distance>0)
			{
				$rep = calculate($distance,array(1,10),0);
				$newdistance = $rep[0];
				$total += $rep[1];
            }
		    if($newdistance>0)
			{
				$rep = calculate($newdistance,array(11,50),1);
				$newdistance = $rep[0];
				$total += $rep[1];
            }
            if($newdistance>0)
			{
				$rep = calculate($newdistance,array(51,100),1);
				$newdistance = $rep[0];
				$total += $rep[1];
            }

            if($newdistance>0)
			{
				$rep = calculate($newdistance,array(101,1000),1);
				$newdistance = $rep[0];
				$total += $rep[1];
            }
            
            $meter = $_POST['meter'];
            $newTotal = $total * $meter;
            $drivertip = ($newTotal * 5)/100;
            $customerdiscount = ($newTotal * 10)/100;
			$gTotal = $newTotal + $drivertip - $customerdiscount;
			echo "
				
			</tbody>

            <tfoot>
            
                <tr>
					<th></th>
					<th></th>
					<th><h6>Charge per 1KM</h6></th>
					<th><h6>LKR $meter</h6></th>
                </tr>
                
				<tr>
					<th></th>
					<th></th>
					<th><h6>Taxi Fee</h6></th>
					<th><h6>LKR $newTotal</h6></th>
				</tr>
		        <tr>
					<th></th>
					<th></th>
					<th><h6>Driver Tip</h6></th>
					<th><h6>LKR $drivertip</h6></th>
                </tr>
                <tr>
					<th></th>
					<th></th>
					<th><h6>Customer Discount</h6></th>
					<th><h6>LKR $customerdiscount</h6></th>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<th><h6>Total Taxi Fee</h6></th>
					<th><h6>LKR $gTotal</h6></th>
				</tr>

			</tfoot>
        </table>";
      
		}
		?>
         <div><center>
				<button class="btn"> <a href="taxi.php">Finalize</a></button>
                </center>
		</div>
    </main>
    <footer>
       <!-- Footer Start-->
       <div class="footer-area black-bg footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-30">
                         <!-- logo -->
                         <div class="footer-logo">
                           <a href="index.html"><img src="assets/img/logo/footer-img.png" alt=""></a>
                         </div>
                         <div class="footer-social footer-social2">
                             <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                             <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                             <a href="#"><i class="fas fa-globe"></i></a>
                             <a href="#"><i class="fab fa-behance"></i></a>
                         </div>
                         <div class="footer-pera">
                              <p>
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="###" target="_blank">Green View Holiday Resort</a>
                              </p>
                         </div>
                      </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Quick Links</h4>
                               <ul>
                                   <li><a href="about.php">About Us</a></li>
                                   <li><a href="rooms.php">Our Best Rooms</a></li>
                                   <li><a href="#">Our Photo Gellary</a></li>
                                   <li><a href="services.php">Pool Service</a></li>
                                   <li><a href="taxi.php">Taxi Service</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Reservations</h4>
                               <ul>
                                   <li><a href="#">Tel: +9478 893 38 67</a></li>
                                   <li><a href="#">Skype: Green View Holiday</a></li>
                                   <li><a href="#">Reservations@greenviewholiday.com</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4  col-sm-5">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Our Location</h4>
                               <ul>
                                   <li><a href="#">221/3,Ranala Road,Hoabarakada,</a></li>
                                   <li><a href="#">Homagama,Sri Lanka SL 10204</a></li>
                               </ul>
                               <!-- Form -->
                                <div class="footer-form" >
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                        method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                            class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                              <button type="submit" name="submit" id="newsletter-submit"
                                              class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.jpg" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>
<?php mysqli_close($db); ?>