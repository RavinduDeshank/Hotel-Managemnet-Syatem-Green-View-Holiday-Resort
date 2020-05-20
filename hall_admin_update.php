<?php
    // Include database connection 

    include('hall_db_connection.php');
    $id = $_GET['update'];
    $getdata = "SELECT * FROM hall_booking WHERE user_id='".$id."'";
    $result = mysqli_query($con, $getdata);

    while ($row = mysqli_fetch_assoc($result)) {
        $userID = $row['user_id'];
        $CustomerName = $row['name_initials'];
        $Mobile = $row['mobile_no'];
        $Guests = $row['no_of_guests'];
        $EventType = $row['event_type'];
        $Venue = $row['venue'];
        $Date = $row['hall_date'];
        $Time = $row['hall_time'];
        $Menu = $row['menu'];
    }

?>
<!doctype HTML> 
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Green View Holiday Resort | Halls</title>
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
            <link rel="stylesheet" href="assets/css/hall_admin.css">
				
    </head>
    </head>
        
    <body>
        <main>
        <section class="blog-area blog-padding">
            <div class="container"> 
                <div class="container_form">
                    <form action="hall_update.php?ID=<?php echo $userID ?>" method="POST"> 
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

                            <!-- Get hall booking details related to a particular customer-->

                            <div class="form_row">
                                <div class="col_label">
                                    <label for="name_initials"> Name With Sirname: </label>
                                </div>    
                                <div class="col_input">
                                    <input type="text" name="name_initials" id="name_initials" value="<?php echo $CustomerName ?>">
                                </div>    
                            </div>

                            <div class="form_row">
                                <div class="col_label">
                                    <label for="mobile_no"> Mobile Number : </label>
                                </div>    
                                <div class="col_input">
                                    <input type="tel" name="mobile_no" id="mobile_no" value="<?php echo $Mobile ?>">
                                </div>    
                            </div>
                        
                            <div class="form_row">
                                <div class="col_label">
                                    <label for="no_of_guests"> Number Of Guests : </label>
                                </div>    
                                <div class="col_input">
                                    <input type="number" name="no_of_guests" id="no_of_guests" value="<?php echo $Guests ?>">
                                </div>    
                            </div>

                            <div class="form_row">
                                <div class="col_label">
                                    <label for="event_type"> Type Of Event : </label>
                                </div>   
                                <div class="col_input">    
                                    <input type="text" name="event_type" id="event_type" value="<?php echo $EventType ?>">
                                </div>
                            </div>
                            
                            <div class="form_row">
                                <div class="col_label">
                                    <label for="venue"> Venue : </label>
                                </div>
                                <div class="col_input">    
                                    <input type="text" name="venue" id="venue" value="<?php echo $Venue ?>">
                                </div>  
                            </div>
                            
                            <div class="form_row">
                                <div class="col_label">
                                    <label for="hall_date"> Date: </label>
                                </div>
                                <div class="col_input">
                                    <input type="date" name="hall_date" id="hall_date" value="<?php echo $Date ?>">
                                </div>
                            </div>

                            <div class="form_row">
                                <div class="col_label">
                                    <label for="hall_time"> Time : </label>
                                </div>
                                <div class="col_input">    
                                    <input type="text" name="hall_time" id="hall_time" value="<?php echo $Time ?>">
                                </div>
                            </div> 
                            
                            <div class="form_row">
                                <div class="col_label">
                                    <label for="menu"> Menu : </label>
                                </div>
                                <div class="col_input">    
                                    <input type="text" name="menu" id="menu" value="<?php echo $Menu ?>">
                                </div>
                            </div>
                            
                            <div class="form_row">
                                <input type="submit" name="update" value="update">
                            </div>
                        </fieldset> 
                    </form>
            </div>
        </main>

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