<?php 
include('dbconnection.php');
session_start();
  if (!isset($_SESSION["user_id"]))
   {
      header("location: ./login.php");
   }

$_SESSION['EXPIRES'] = time() + 3600;
?>