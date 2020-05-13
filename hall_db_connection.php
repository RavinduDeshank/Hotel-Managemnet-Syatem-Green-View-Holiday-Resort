<?php
  $con=mysqli_connect("localhost","","","greenview");
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else {
    error_reporting(E_ALL ^ E_NOTICE);
  }

?>