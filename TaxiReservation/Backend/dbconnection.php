<?php

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'greenview';

    /*database connection*/
    $db = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if (mysqli_connect_errno()) {
        die('Database Connection Failed' . mysqli_connect_error());
    }


?>
