<?php

 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $dbname = 'greenview';

 $connection = mysqli_connect('localhost','root','','greenview');

 //Checking the connection
 if (mysqli_connect_error()) {
     die('Database connection failed'.mysqli_connect_error());
 }

 ?>