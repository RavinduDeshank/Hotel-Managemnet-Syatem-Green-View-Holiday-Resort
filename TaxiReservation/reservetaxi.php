<?php require_once('Backend/dbconnection.php'); ?>
<?php
    $errors = array();
    $username = '';
    $password = '';
	$full_name = '';
	$email = '';
	$tel_number = '';
	$time = '';
	$date = '';
    $location = '';
    $taxi_fee = '';
	$vehicle_type = '';

	/*taxi reservation process*/
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
		$full_name = $_POST['full_name'];
		$email = $_POST['email'];
		$tel_number = $_POST['tel_number'];
		$time = $_POST['time'];
		$date = $_POST['date'];
        $location = $_POST['location'];
        $taxi_fee = $_POST['taxi_fee'];
		$vehicle_type = $_POST['vehicle_type'];
        
		//checking required fields
		$req_fields = array('username','password','full_name','email','tel_number','time','date','location','vehicle_type');

		foreach ($req_fields as $field) {
			if (empty(trim($_POST[$field]))) {
				$errors[] = $field . ' is requierd';
			}
		}

		if(empty($errors)) {
            //no errors found..adding new record
            $username = mysqli_real_escape_string($db, $_POST['username']);
            $password = mysqli_real_escape_string($db, $_POST['password']);
			$full_name = mysqli_real_escape_string($db, $_POST['full_name']);
			$email = mysqli_real_escape_string($db, $_POST['email']);
			$tel_number = mysqli_real_escape_string($db, $_POST['tel_number']);
			$time = mysqli_real_escape_string($db, $_POST['time']);
			$date = mysqli_real_escape_string($db, $_POST['date']);
            $location = mysqli_real_escape_string($db, $_POST['location']);
            $taxi_fee = mysqli_real_escape_string($db, $_POST['taxi_fee']);
			$vehicle_type = mysqli_real_escape_string($db, $_POST['vehicle_type']);
			 
			$query = "INSERT INTO taxicustomer ( ";
			$query .= "username, password, user_type, full_name, email, tel_number, time, date, location, taxi_fee, vehicle_type, is_deleted";
			$query .= ") VALUES (";
			$query .= "'{$username}', '{$password}', 'taxiCustomer', '{$full_name}', '{$email}', '{$tel_number}', '{$time}', '{$date}', '{$location}', '{$taxi_fee}', '{$vehicle_type}', 0";
			$query .= ")";

			$result = mysqli_query($db, $query);

			if ($result){
				//query successfull
				header('Location: viewtaxi.php?reservation_successfull=true');
			}else{
                $errors[] = 'Failed to add new record.';
               
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
                                        <li><a href="../index.php">Home</a></li>
                                        <li><a href="../about.php">About</a></li>
                                        <li><a href="../services.php">Service</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="../rooms.php">Rooms</a></li>
                                                <li><a href="###">Halls</a></li>
                                                <li><a href="../Promotion.php">Promotions</a></li>
                                                <li><a href="../blog.php">Blog</a></li>
                                                <li><a href="taxi.php">Taxi Reservation</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="../contact.php">Contact</a></li>
                                        <li><a href="###">Login</a>
                                            <ul class="submenu">
                                                <li><a href="../login.php">Login</a></li>
                                                <li><a href="../register.php">SignUp</a></li>
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
	<h1>Reserve Your Taxi<span><a href="ongoingres.php"> Go Back </a><span></h1>
	
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
	
	<form action="reservetaxi.php" method="post" class="userform">
    <p>
		<label for="">Username:</label>
		<input type="text" name="username" placeholder="Enter a username here" <?php echo 'value="' . $username .'"';  ?>>
	</p>
    <p>
		<label for="">Password:</label>
		<input type="password" name="password" placeholder="Enter a password here" <?php echo 'value="' . $password .'"';  ?>>
	</p>
	<p>
		<label for="">Full Name:</label>
		<input type="text" name="full_name" placeholder="Enter your Full Name" <?php echo 'value="' . $full_name .'"';  ?>>
	</p>

	<p>
		<label for="">Email:</label>
		<input type="email" name="email" placeholder="Enter your Email" <?php echo 'value="' . $email .'"';  ?>>
	</p>

	<p>
		<label for="">Phone:</label>
		<input type="tel" placeholder="Enter your phone number" name="tel_number" pattern="^\d{3}\d{7}$" >
		<small>0123456789</small>
	</p>

	<p>
	<label for="">Time:</label>
	<input type="time" name="time" <?php echo 'value="' . $time .'"';  ?>>
	</p>

	<p>
	<label class="form-label">Pickup Date:</label>
	<input class="form-control" type="date" name="date" <?php echo 'value="' . $date .'"';  ?>>
	</p>

	<p>
		<label for="">Location:</label>
		<input type="text" placeholder="Enter ZIP/Location" name="location" <?php echo 'value="' . $location .'"';  ?>>
	</p>

    <p>
		<label for="">Total Taxi Fee:</label>
        <input type="price" placeholder="Enter the calculated fee" name="taxi_fee" <?php echo 'value="' . $taxi_fee .'"';  ?>><br>
        <span><a href="caltaxi.php" target="_blank">Click here, to findout the taxi fee.</a></span>
	</p>

	<p class="form-inline">
	<label class="form-label">Vehicle Type:</label>
	<select id="cars" name="vehicle_type" <?php echo 'value="' . $vehicle_type .'"';  ?>>
		<option value="" selected hidden >Select Vehicle type</option>
		<option label="Car">Car</option>
  		<option label="Van">Van</option>
  		<option label="Budget Car">Budget Car</option>
	</select>
    <span>Select vehicle type which used in calculating the taxifee</span>
	</p>

	<p>
		<label for="">&nbsp;</label>
		<button class="btn" type="submit" name="submit">Reserve</button>
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
                                   <li><a href="../about.php">About Us</a></li>
                                   <li><a href="../rooms.php">Our Best Rooms</a></li>
                                   <li><a href="#">Our Photo Gellary</a></li>
                                   <li><a href="../services.php">Pool Service</a></li>
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