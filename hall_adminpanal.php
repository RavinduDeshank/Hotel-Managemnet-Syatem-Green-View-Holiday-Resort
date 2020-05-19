<?php
<<<<<<< HEAD
=======
    //Include database connection

>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
    include('hall_db_connection.php');
    $sql = "SELECT * FROM hall_booking";
    $row = mysqli_query($con, $sql);
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

    <header>
        
    </header>
    <body>

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
        <br>
        <br>

        <section class="blog-area blog-padding">
            <div class="container"> 
                <div class="container_form">
                    <div class="row justify-content-center"> 
                        <div class="col-xl-8">
                            <div class="font-back-tittle mb-50">
                                <div class="archivment-front">
                                    <h3> Admin View </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class=admin>
                    <tr>
                        <th>ID</th>
                        <th>Customer Name</th>
                        <th>Mobile Number</th>
                        <th>No Of Guests</th>
                        <th>Event Type</th>
                        <th>Venue</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Menu</th>
                    </tr>

                    <?php
                        while($data=mysqli_fetch_assoc($row))
                        {
                    ?>

<<<<<<< HEAD
=======
                    <!-- Get all the hall bookings from the database -->
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
                    <tr>
                        <td><?php echo $data['user_id']; ?></td>
                        <td><?php echo $data['name_initials']; ?></td>
                        <td><?php echo $data['mobile_no']; ?></td>
                        <td><?php echo $data['no_of_guests']; ?></td>
                        <td><?php echo $data['event_type']; ?></td>
                        <td><?php echo $data['venue']; ?></td>
                        <td><?php echo $data['hall_date']; ?></td>
                        <td><?php echo $data['hall_time']; ?></td>
                        <td><?php echo $data['menu']; ?></td>
                        <td><a href="hall_admin_update.php?update=<?php echo $data['user_id']; ?>">Update</a></td>
                        <td><a href="hall_admin_delete.php?delete=<?php echo $data['user_id']; ?>">Delete</a></td>
                    </tr>

                    <?php
                        }
                    ?>
                    </table>
                    <br>
                    <br>

                    <div>
                        <a href="admin.php" class = "hall_booking_btn">Back</a>
                    </div>
                </div>
            </div>        
        </section>

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