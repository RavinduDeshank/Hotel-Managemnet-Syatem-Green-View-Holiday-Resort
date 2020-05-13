<?php require_once('Backend/taxisession.php'); ?>
<?php
	$errors = array();
	$driver_id = '';
    $licence_num = '';
    $full_name = '';
	$email = '';
    $tel_num = '';
    $NIC = '';
    $address = '';
    
    if(isset($_GET['user_id'])) {
        //getting driver information
        $driver_id = mysqli_real_escape_string($db, $_GET['driver_id']);
        $query = "SELECT * FROM taxidriver WHERE user_id = {$driver_id} LIMIT 1";
    
       $result_set = mysqli_query($db, $query);
       
       if($result_set) {
           if (mysqli_num_rows($result_set) == 1) {
               //driver found
			   $result = mysqli_fetch_assoc($result_set);
			   $driver_id = $result['user_id'];
               $licence_num = $result['licence_num'];
               $full_name = $result['full_name'];
               $email = $result['email'];
	           $tel_num = $result['tel_num'];
	           $NIC = $result['NIC'];
	           $address = $result['address'];
                  
           } else {
               //driver not found
               header('location: viewtaxidrivers.php?err=driver_not_found');
           }
       } else {
           //query unsuccessfull
           header('location: edittaxidriver.php?err=query_failed');
       }
    
    }

	
	if(isset($_POST['submit'])) {

        $driver_id = $_POST['driver_id'];
        $licence_num = $_POST['licence_num'];
        $full_name = $_POST['full_name'];
		$email = $_POST['email'];
		$tel_num = $_POST['tel_num'];
		$NIC = $_POST['NIC'];
		$address = $_POST['address'];

		//checking required fields
		$req_fields = array('licence_num','full_name','email','tel_num','NIC','address');

		foreach ($req_fields as $field) {
			if (empty(trim($_POST[$field]))) {
				$errors[] = $field . ' is requierd';
			}
		}

		//checking if email address already exists
		$email = mysqli_real_escape_string ($db, $_POST['email']);
		$query = "SELECT * FROM taxidriver WHERE email = '{$email}' AND user_id != {$driver_id} LIMIT 1";

		$result_set = mysqli_query($db, $query);

		
		

		if(empty($errors)) {
			//no errors found..adding new record
            $licence_num = mysqli_real_escape_string($db, $_POST['licence_num']);
            $full_name = mysqli_real_escape_string($db, $_POST['full_name']);
			$email = mysqli_real_escape_string($db, $_POST['email']);
			$tel_num = mysqli_real_escape_string($db, $_POST['tel_num']);
			$NIC = mysqli_real_escape_string($db, $_POST['NIC']);
			$address = mysqli_real_escape_string($db, $_POST['address']);
			 
			$query = "UPDATE taxidriver SET ";
			$query .= "`licence_num` = '{$licence_num}', ";
			$query .= "full_name = '{$full_name}', ";
			$query .= "email = '{$email}', ";
            $query .= "tel_num = '{$tel_num}', ";
            $query .= "NIC = '{$NIC}', ";
            $query .= "address = '{$address}' ";
			$query .= "WHERE user_id = {$driver_id} LIMIT 1";
            
            

			$result = mysqli_query($db, $query);

			if ($result){
				//query successfull
				header('Location: viewtaxidrivers.php?driver_changed=true');
			}else{
				$errors[] = 'Failed to modify the record.';
				
			}


		}

	}


	?>
	<!doctype html>
	<html class="no-js" lang="zxx">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="x-ua-compatible" content="ie=edge">
			<title>Green View Holiday Resort | Home</title>
			<meta name="description" content="">
			<meta name="viewport" content="width=device-width, initial-scale=1">
	
			<link rel="manifest" href="site.webmanifest">
			<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
	
			<!-- CSS here -->
				
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
				<link rel="stylesheet" href="assets/css/taxi.css">


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
											<li><a href="">Logout</a>
                                            <ul class="submenu">
                                                <li><a href="Backend/logout.inc.php">Logout</a></li>
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
	<h1>Change Driver Information<button class="btn"><a href="viewtaxidrivers.php">Back</a></button></h1>
	
	<?php
		if(!empty($errors)) {
			echo '<div class="errmsg">';
			echo '<b>There were error(s) on your form.</b><br>';
			foreach ($errors as $error) {
				$error = ucfirst(str_replace("_"," ",$error));
				echo '- '. $error . '<br>';
			}
			echo '</div>';
		}
	?>
	
	<form action="edittaxidriver.php" method="post" class="userform">
    
	<input type="hidden" name="driver_id" value="<?php echo $driver_id ;?>">
    
    <p>
		<label for="">Licence Number:</label>
		<input type="text" name="licence_num" placeholder="Enter your Licence Number" <?php echo 'value="' . $licence_num .'"';  ?>>
	</p>
    
    <p>
		<label for="">Full Name:</label>
		<input type="text" name="full_name" placeholder="Enter your Full Name" <?php echo 'value="' . $full_name .'"';  ?>>
	</p>

    <p>
	    <label for="">Email:</label>
	    <input type="email" name="email" placeholder="Enter your Email"  <?php echo 'value="' . $email .'"';  ?>>
	</p>

	<p>
		<label for="">Telephone Number:</label>
		<input type="tel" name="tel_num" placeholder="Enter your Telephone Number"  pattern="^\d{3}\d{7}$" <?php echo 'value="' . $tel_num .'"';  ?>>
        <small>0123456789</small>
    </p>

    <p>
		<label for="">NIC (National Identity Card) Number:</label>
		<input type="text" placeholder="Enter your NIC (National Identity Card) Number" name="NIC" <?php echo 'value="' . $NIC .'"';  ?>>
	</p>
	

    <p>
	<label for="">Address:</label>
	<input type="text" name="address" placeholder="Enter your Address"  <?php echo 'value="' . $address .'"';  ?>>
	</p>
	

	<p>
		
		<label for="">&nbsp;</label>
		<button class="btn" type="submit" name="submit">Change</button>
	</p>
	


	</form>
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