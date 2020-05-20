<?php
<<<<<<< HEAD
  $con=mysqli_connect("localhost","","","greenview");
=======
  //Hall database connection
  $con=mysqli_connect("localhost","root","","greenview");
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else {
    error_reporting(E_ALL ^ E_NOTICE);
  }

?>