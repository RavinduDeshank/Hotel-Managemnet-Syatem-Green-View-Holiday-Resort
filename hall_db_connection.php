<?php
  //Hall database connection
  $con=mysqli_connect("localhost","root","","greenview");
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else {
    error_reporting(E_ALL ^ E_NOTICE);
  }

?>