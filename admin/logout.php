<?php
session_start();
unset($_SESSION["user"]);
header("location:room_admin_login.php");
?>