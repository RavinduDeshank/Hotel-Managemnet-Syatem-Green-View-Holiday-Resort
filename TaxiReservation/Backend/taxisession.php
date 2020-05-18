<?php 
/*connect to the database*/
include('dbconnection.php');

/*control sessions with user id*/
session_start();
  if (!isset($_SESSION["user_id"]))
   {
      header("location: ./taxilogin.php");
   }

$_SESSION['EXPIRES'] = time() + 3600;
?>