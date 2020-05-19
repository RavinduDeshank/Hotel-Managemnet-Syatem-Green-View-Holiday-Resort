<<<<<<< HEAD
=======
<!-- Include database connection -->
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
<?php
    include('hall_db_connection.php');
    session_start();
?> 
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Green View Holiday Resort | Register</title>
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
            <link rel="stylesheet" href="assets/css/contact.css">
            <link rel="stylesheet" href="assets/css/hall_effects.css">
            <link rel="stylesheet" href="assets/css/hall_booking_effects.css">
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
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="services.html">Service</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="rooms.html">Rooms</a></li>
                                                <li><a href="halls.php">Halls</a></li>
                                                <li><a href="Promotion.html">Promotions</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="###">Login</a>
                                            <ul class="submenu">
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">SignUp</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                         </div>             
                         <div class="col-xl-2 col-lg-2">
                            <!-- header-btn -->
                            <div class="header-btn">
<<<<<<< HEAD
                                <a href="#" class="btn btn1 d-none d-lg-block ">Book Online</a>
=======
                                <a href="login.php" class="btn btn1 d-none d-lg-block ">Book Online</a>
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
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
    <br>
    <br>
    <main>
    
        <section class="blog-area blog-padding">
            <div class="container"> 
                <div class="all">
                    <div class="row">
                        <div class="column">
                            <div class="container_form">
                                <form action="hall_reserve_php.php" method="POST"> 
                                    <fieldset>
                                        <br>
                                        <div class="row justify-content-center"> 
                                            <div class="col-xl-8">
                                                <!-- Seciton Tittle  -->
                                                <div class="font-back-tittle mb-50">
                                                    <div class="archivment-front">
                                                        <h3>Hall Booking</h3>
                                                    </div> 
                                                    
                                                </div>
                                            </div>
                                        </div>

<<<<<<< HEAD
=======
                                        <!-- Lables and input fields in the form -->
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
                                        <div class="form_row">
                                            <div class="col_label">
                                                <label for="name_initials"> Name With Sirname: </label>
                                            </div>    
                                            <div class="col_input">
                                                <input type="text" name="name_initials" id="name_initials" required autoforcus placeholder="Name with sirname" pattern="[a-zA-Z]{3,}[' ']{1}[a-zA-Z]{3,}" title="Please enter both name and sirname">
                                            </div>    
                                        </div>

                                        <div class="form_row">
                                            <div class="col_label">
                                                <label for="mobile_no"> Mobile Number: </label>
                                            </div>    
                                            <div class="col_input">
<<<<<<< HEAD
                                                <input type="tel" name="mobile_no" id="mobile_no" required placeholder="Mobile number" pattern="[0-9]{4} [0-9]{3} [0-9]{3}" maxlength="12" title="Please enter your mobile number in this format: #### ### ###">
=======
                                                <input type="tel" name="mobile_no" id="mobile_no" required placeholder="Mobile number" pattern="[0-9]{10}" maxlength="10" title="Please enter your mobile number in this format: #### ### ###">
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
                                            </div>    
                                        </div>
                                    
                                        <div class="form_row">
                                            <div class="col_label">
                                                <label for="no_of_guests"> Number Of Guests: </label>
                                            </div>  
                                            <div class="col_input">
                                                <input type="number" name="no_of_guests" id="no_of_guests" required placeholder="Guest capacity" maxlength="3" title="Please enter the guest capacity">
                                            </div>   
                                        </div>

                                        <div class="form_row">
                                            <div class="col_label">
                                                <label for="event_type"> Type Of Event: </label>
                                            </div>   
                                            <div class="col_input"> 
                                                <select name="event_type" id="event_type" required>
                                                    <option value="">Select event type </option>
                                                    <option value="wedding">Wedding</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                        </div>    

                                        <div class="form_row">
                                            <div class="col_label">
                                                <label for="venue"> Venue: </label>
                                            </div>
                                            <div class="col_input"> 
                                                <select name="venue" id="venue" required>
                                                    <option value="">Select venue </option>
                                                    <option value="indoor">Indoor</option>
                                                    <option value="outdoor">Outdoor</option>
                                                </select>
                                            </div>     
                                        </div>
                                        
                                        <div class="form_row">
                                            <div class="col_label">
                                                <label for="hall_date"> Date: </label>
                                            </div>
                                            <div class="col_input">
                                                <input type="date" name="hall_date" id="hall_date" min="2020-05-01" required>
                                            </div>
                                        </div>

                                        <div class="form_row">
                                            <div class="col_label">
                                                <label for="hall_time"> Time: </label>
                                            </div>
                                            <div class="col_input"> 
                                                <select name="hall_time" id="hall_time">
                                                    <option value=""> Select time </option>
                                                    <option value="morning"> Morning </option>
                                                    <option value="evening"> Evening </option>
                                                </select>
                                            </div>   
                                        </div> 
                                        
                                        <div class="form_row">
                                            <div class="col_label">
                                                <label for="menu"> Menu: </label>
                                            </div>
                                            <div class="col_input"> 
                                                <select name="menu" id="menu">
                                                    <option value=""> Select menu type </option>
                                                    <option value="platinum"> Platinum </option>
                                                    <option value="gold"> Gold </option>
                                                    <option value="silver"> Silver </option>
                                                </select>
                                            </div>  
                                        </div>
                                        
                                        <div class="form_row">
                                            <input type="submit" name="submit" value="submit">
                                        </div>
                                    </fieldset> 
                                </form>
                            </div>
                        </div>
                        <br/>
                        <div class="column">
                            <img ; src="assets/img/halls/booking.jpg">
                        </div>
                    </div>
                </div>

            <br>
                <br>
<<<<<<< HEAD
=======
                <!--Menu Types-->
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
                <div>
                    <h2><i><b>Menus</b></i></h2>
                </div>
                <br>
                <br>
                <div class="row">
<<<<<<< HEAD
					<!--Royal Hall-->
=======
					<!--Platinum menu-->
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
					<div class="col-xl-4 col-lg-6 col-md-6">
						<div class="single-blog mb-50">
							<div class="blog-img">
                                <a href="hall_menu_platinum.html"><img src="assets/img/halls/menu_platinum_art1.jpg" alt="platinum" style="width:100%"></a>
                                
                            </div>
						</div>
					</div>
<<<<<<< HEAD
					<!--Regal Hall-->
=======
					<!--Gold menu-->
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
					<div class="col-xl-4 col-lg-6 col-md-6">
						<div class="single-blog mb-50">
							<div class="blog-img">
								<a href="hall_menu_gold.html"><img src="assets/img/halls/menu_gold_art.jpg" alt="gold" style="width:100%"></a>
							</div>
						</div>
					</div>
<<<<<<< HEAD
					<!--Outdoor Area-->
=======
					<!--Silver menu-->
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
					<div class="col-xl-4 col-lg-6 col-md-6">
						<div class="single-blog mb-50">
							<div class="blog-img">
								<a href="hall_menu_silver.html"><img src="assets/img/halls/menu_silver_art.jpg" alt="silver" style="width:100%"></a>
							</div>
						</div>
					</div>
				</div>
            </div>    
        </section>
        <br>
        <br>
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
                            <a href="index.php"><img src="assets/img/logo/footer-img.png" alt=""></a>
                          </div>
                          <div class="footer-social footer-social2">
                              <a href="#"><i class="fab fa-facebook-f"></i></a>
                              <a href="#"><i class="fab fa-twitter"></i></a>
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
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="rooms.html">Our Best Rooms</a></li>
                                    <li><a href="#">Our Photo Gellary</a></li>
                                    <li><a href="services.html">Pool Service</a></li>
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