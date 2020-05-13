<?php
  SESSION_START();

  if(!isset($_SESSION['uId']) && !isset($_SESSION['uname'])){
    header("Location: login.php");
  }
  
include '../SQL/dbconnection.php';

$u_id = "";
if (isset($_GET['uId'])) {
  $u_id = mysqli_real_escape_string($con, $_GET['uId']);
  $query = "SELECT * FROM users WHERE uId = {$u_id}";

  $resultset = mysqli_query($con, $query);

  if ($resultset) {
    if (mysqli_num_rows($resultset) == 1) {
      $username = mysqli_fetch_assoc($resultset);
      $customerName = $result['uname'];
      $fname = $result['fname'];
      $lname = $result['lname'];
      $gender = $result['gender'];
      $email = $result['email'];
      $nationality = $result['nationality'];
      $address = $result['address'];
      $mnumber = $result['mnumber'];

    } else {
      header('Location: login.php?UserNotFound');
    }
  } else {
    header('Location: login.php?SQLError');
  }
}

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Green View Holiday Resort | User Details</title>
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
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/contact.css">
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
    <br>
    <br>

    <?php if (isset($_GET['error']))
                    if ($_GET['error'] == "emptyFields") : ?>
                    <div class="fieldsempty" data-fields="<?= $_GET['emptyFields']; ?>"></div>
                  <?php endif;  ?>

                  <?php if (isset($_GET['error']))
                    if ($_GET['error'] == "invalidmobile") : ?>
                    <div class="invalidmobilenum" data-mobilenumberror="<?= $_GET['invalidmobile']; ?>"></div>
                  <?php endif;  ?>



                  <?php if (isset($_GET['error']))
                    if ($_GET['error'] == "invalidland") : ?>
                    <div class="invalidlandnum" data-landnumberror="<?= $_GET['invalidland']; ?>"></div>
                  <?php endif;  ?>


                  <?php if (isset($_GET['error']))
                    if ($_GET['error'] == "invalidEmail") : ?>
                    <div class="invalidmail" data-mailerror="<?= $_GET['invalidEmail']; ?>"></div>
                  <?php endif;  ?>



                  <?php if (isset($_GET['error']))
                    if ($_GET['error'] == "SQLError") : ?>
                    <div class="sqlerror" data-sql="<?= $_GET['SQLError']; ?>"></div>
                  <?php endif;  ?>


                  <?php if (isset($_GET['error']))
                    if ($_GET['error'] == "CustomerTaken") : ?>
                    <div class="taken" data-customername="<?= $_GET['CustomerTaken']; ?>"></div>
                  <?php endif;  ?>

                  <form action="../Backend/updateUser.php" method="POST">

                  <div id="box6">
                        <div class="topic4">
                            <h2>User Details</h2>
                        </div>
                  <div class="form-row">
                    <div class="form-group">
                      <label>User Name<span class="requiredIcon" style="color:red;">*</span></label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                        </div>
                        <?php
                        if (isset($_GET['uname'])) {
                          $uname = $_GET['uname'];
                          echo '<input type="text" class="form-control" data-validation=" length required" data-validation-length="min4" data-validation-error-msg="Please Enter Minimum 4 Characters" name="cname" value="' . $uname . '">';
                        } else {
                          echo '<input type="text" class="form-control" data-validation=" length required" data-validation-length="min4" data-validation-error-msg="Please Enter Minimum 4 Characters" name="cname"  value="' . $uName . '"; >';
                        }
                        ?>

                      </div>
                    </div>

                
                    
                    <div class="form-group">
                      <label>First Name<span class="requiredIcon" style="color:red;">*</span></label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                        </div>
                        <?php
                        if (isset($_GET['fname'])) {
                          $fname = $_GET['fname'];
                          echo '<input type="text" class="form-control" data-validation="required" data-validation-error-msg="Please Fill the First Name of Customer" name="fname" value="' . $fname . '">';
                        } else {
                          echo '<input type="text" class="form-control" data-validation="required" data-validation-error-msg="Please Fill the First Name of Customer" name="fname"  value="' . $fName . '"; >';
                        }
                        ?>

                      </div>
                    </div>

                    
                    <div class="form-group">
                      <label>Last Name<span class="requiredIcon" style="color:red;">*</span></label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                        </div>
                        <?php
                        if (isset($_GET['lname'])) {
                          $lname = $_GET['lname'];
                          echo '<input type="text" class="form-control" data-validation="required" data-validation-error-msg="Please Fill the Last Name of Customer" name="lname" value="' . $lname . '">';
                        } else {
                          echo '<input type="text" class="form-control" data-validation="required" data-validation-error-msg="Please Fill the Last Name of Customer" name="lname"  value="' . $lName . '"; >';
                        }
                        ?>

                      </div>
                    </div>
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label>Gender<span class="requiredIcon" style="color:red;">*</span></label><br>
                        <select name="gender" class="form-control select2bs4" data-validation="required" data-validation-error-msg="Please Select Gender of Customer">
                          <?php
                          if (isset($_GET['gender'])) {
                            $gender = ($_GET['gender']); ?>
                            <option value="<?php echo $gender; ?>" selected><?php echo $gender; ?></option>
                          <?php } else { ?>
                            <option value="<?php echo $CustomerGender; ?>" selected><?php echo $CustomerGender; ?></option>
                          <?php } ?>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                    </div>

                    <br>
                    <br>

                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                          </div>
                          <?php
                          if (isset($_GET['email'])) {
                            $email = $_GET['email'];
                            echo '<input type="text" class="form-control" data-validation-optional="true" data-validation="email" name="email" value="' . $email . '">';
                          } else {
                            echo '<input type="text" class="form-control" data-validation-optional="true" data-validation="email" name="email" value="' . $CustomerEmail . '">';
                          }
                          ?>

                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Mobile Number<span class="requiredIcon" style="color:red;">*</span></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                          </div>
                          <?php
                          if (isset($_GET['mnumber'])) {
                            $mnumber = $_GET['mnumber'];
                            echo '<input type="text" class="form-control" data-validation-optional="true" data-validation="number length" data-validation-length="10-10" data-validation-error-msg="The Mobile Number Must Be 10 Digits" name="lnumber" value="' . $mnumber . '">';
                        } else {
                          echo '<input type="text" class="form-control" data-validation-optional="true" data-validation="number length" data-validation-length="10-10" data-validation-error-msg="The Mobile Number Must Be 10 Digits" name="lnumber" value="' . $CustomerMNumber . '">';
                        }
                          ?>

                        </div>
                    </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Nationality</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                          </div>
                          <?php
                          if (isset($_GET['nationality'])) {
                            $nationality = $_GET['nationality'];
                            echo '<input type="email" class="form-control" data-validation-optional="true" data-validation="email" name="nationality" value="' . $nationality . '">';
                          } else {
                            echo '<input type="email" class="form-control" data-validation-optional="true" data-validation="email" name="nationality" value="' . $CustomerNationality . '">';
                          }
                          ?>

                        </div>
                      </div>

                    <div class="form-group">
                      <label>Address<span class="requiredIcon" style="color:red;">*</span></label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-map-marked"></i></span>
                        </div>
                        <?php
                        if (isset($_GET['address'])) {
                          $address = $_GET['address'];
                          echo '<input type="text" class="form-control" data-validation="required" data-validation-error-msg="Please Fill the Address of Customer" name="address" value="' . $address . '">';
                        } else {
                          echo '<input type="text" class="form-control" data-validation="required" data-validation-error-msg="Please Fill the Address of Customer" name="address" value="' . $CustomerAddress . '">';
                        }
                        ?>

                      </div>
                    </div>
                    

                    <?php
                    if (isset($_GET['uId'])) {
                      $UID = $_GET['uId'];
                      echo '<input type="hidden" name="customerid" value="' . $UID . '">';
                    } else {
                      echo '<input type="hidden" name="customerid" value="' . $u_id . '">';
                    }
                    ?>
                    <button type="submit" id="addCustomer" name="addCustomer" class="btn btn-success">Update Customer</button>
                    <a href="userPanel.php"><button type="button" class="btn btn-warning" value="Back"><i class="fas fa-arrow-left"></i> Back To User</button></a>
                  </form>
                </div>
                </div>
              </div>
            </div>
          </div>
        
    
        
<br>
<br>
<br>

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
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved by <a href="###" target="_blank">Green View Holiday Resort</a>
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
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address" class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.jpg" alt=""></button>
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