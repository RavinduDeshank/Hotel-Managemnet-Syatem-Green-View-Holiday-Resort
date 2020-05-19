<?php 
<<<<<<< HEAD
include('dbconnection.php');
=======
/*connect to the database*/
include('dbconnection.php');

/*control sessions with user id*/
>>>>>>> 77b7c97d6aa58937a901cee9a1114492dbbe1212
session_start();
  if (!isset($_SESSION["user_id"]))
   {
      header("location: ./taxilogin.php");
   }

$_SESSION['EXPIRES'] = time() + 3600;
?>